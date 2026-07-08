<?php

namespace App\Http\Controllers;

use App\Models\AnswerKey;
use App\Models\Progress;
use App\Models\Quiz;
use App\Models\StudentAnswer;
use App\Models\StudentActivity;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class QuizController extends Controller
{
    protected array $menus = [
        ['name' => 'Karakteristik', 'route' => 'dashboard.karakteristik', 'progress' => 0, 'key' => 'karakteristik'],
        ['name' => 'Rekonstruksi', 'route' => 'dashboard.rekonstruksi', 'progress' => 1, 'key' => 'rekonstruksi'],
        ['name' => 'Menyelesaikan Masalah', 'route' => 'dashboard.masalah', 'progress' => 2, 'key' => 'masalah'],
        ['name' => 'Evaluasi', 'route' => 'dashboard.evaluasi', 'progress' => 3, 'key' => 'evaluasi'],
    ];

    public function show($quizKey)
    {
        $progress = Progress::where('user_id', auth()->id())->first();
        $currentProgress = $progress ? $progress->progress : 0;

        // ===========================================
        // CEK APAKAH MATERI SUDAH DISELESAIKAN
        // ===========================================

        if ($quizKey !== 'evaluasi') {

            $materiSelesai = StudentActivity::where('user_id', auth()->id())
                ->where('menu_key', $quizKey)
                ->where('completed', true)
                ->exists();

            if (!$materiSelesai) {
                return redirect()->route('dashboard')->with('notification', [
                    'icon' => 'warning',
                    'title' => 'Materi Belum Selesai',
                    'message' => 'Silakan selesaikan seluruh materi sebelum mengerjakan kuis.'
                ]);
            }
        }

        // Tambahkan array pemetaan progress
        $menuKeys = array_column($this->menus, 'key'); // ['karakteristik', 'rekonstruksi', ...]
        $quizIndex = array_search($quizKey, $menuKeys);

        // LOGIKA PENGUNCIAN: Jika index kuis > progress saat ini, tolak akses
        if ($quizIndex !== false && $quizIndex > $currentProgress) {
            return redirect()->route('dashboard')->with('notification', [
                'icon' => 'error',
                'title' => 'Akses Ditolak',
                'message' => 'Anda harus menyelesaikan materi sebelumnya terlebih dahulu!'
            ]);
        }

        $quiz = Quiz::where('key', $quizKey)
            ->with(['questions' => function ($q) {
                $q->orderBy('question_number');
            }])
            ->firstOrFail();

        // 🔥 Bersihkan & urutkan soal
        $quiz->questions = $quiz->questions
            ->unique('question_number')
            ->sortBy('question_number')
            ->values();

        // =========================================================
        // PENGATURAN TAMPILAN: JIKA SUDAH PERNAH MENGERJAKAN
        // =========================================================
        $existingQuiz = \App\Models\StudentQuiz::where('user_id', auth()->id())
            ->where('quiz_key', $quizKey)
            ->first();

        if ($existingQuiz) {
            
            // 🌟 FIX: Ambil riwayat jawaban siswa yang tersimpan di Session
           $savedAnswers = StudentAnswer::where('user_id', auth()->id())
                ->where('quiz_key', $quizKey)
                ->get()
                ->keyBy('question_id');

            $results = [];
            foreach ($quiz->questions as $question) {

                $savedAnswer = $savedAnswers->get($question->id);

                $userAnswer = $savedAnswer?->answer;
                $isCorrect = $userAnswer !== null && $userAnswer === $question->correct_answer;

                $results[] = [
                    'question' => $question->question,
                    'image' => $question->image,
                    'options' => [
                        'a' => $question->option_a,
                        'b' => $question->option_b,
                        'c' => $question->option_c,
                        'd' => $question->option_d,
                    ],
                    'user_answer' => $userAnswer, // 🌟 Sekarang tidak null lagi, diambil dari session
                    'correct_answer' => $question->correct_answer,
                    'explanation' => $question->explanation,
                    'reinforcement' => $question->reinforcement,
                    'is_correct' => $isCorrect, // 🌟 Status benar/salah disesuaikan secara otomatis
                ];
            }

            // Tampilkan halaman HASIL KUIS dengan riwayat jawaban asli siswa
            return view('layouts.quizResult', [
                'quiz' => $quiz,
                'score' => $existingQuiz->score,
                'results' => $results,
                'quizKey' => $quizKey,
                'menus' => $this->menus,
                'progress' => $progress,
            ]);
        }
        // =========================================================

        // JIKA BELUM PERNAH KERJA, TAMPILKAN SOAL KOSONG
        return view('layouts.quiz', [
            'progress' => $progress,
            'menus' => $this->menus,
            'quizKey' => $quizKey,
            'quiz' => $quiz,
        ]);
    }

    public function result(Request $request, $quizKey)
    {
        $progress = Progress::where('user_id', auth()->id())->first();

        $quiz = Quiz::where('key', $quizKey)
            ->with(['questions' => function ($q) {
                $q->orderBy('question_number');
            }])
            ->firstOrFail();

        // 🔥 Samakan dengan show()
        $quiz->questions = $quiz->questions
            ->unique('question_number')
            ->sortBy('question_number')
            ->values();

        $userAnswers = $request->except('_token');

        // ✅ VALIDASI FINAL (ANTI ERROR)
        $expectedFields = $quiz->questions
            ->pluck('id')
            ->map(fn($id) => 'question_' . $id)
            ->toArray();

        $submittedFields = array_keys($userAnswers);

        $missing = array_diff($expectedFields, $submittedFields);

        if (!empty($missing)) {
            return back()
                ->withErrors('Harap jawab semua pertanyaan!')
                ->withInput();
        }

        // 🌟 FIX: Simpan semua jawaban yang di-submit ke dalam Session agar tidak hilang saat masuk kembali
        session(['quiz_answers_' . $quizKey => $userAnswers]);

        // ✅ Hitung skor
        $correct = 0;
        $results = [];

        foreach ($quiz->questions as $question) {
            $field = 'question_' . $question->id;

            // ambil dari request
            $userAnswer = $request->input($field);

            StudentAnswer::updateOrCreate(
                [
                    'user_id' => auth()->id(),
                    'quiz_key' => $quizKey,
                    'question_id' => $question->id,
                ],
                [
                    'answer' => $userAnswer,
                ]
            );

            $isCorrect = $userAnswer !== null && $userAnswer === $question->correct_answer;

            if ($isCorrect) {
                $correct++;
            }

            $results[] = [
                'question' => $question->question,
                'image' => $question->image,
                'options' => [
                    'a' => $question->option_a,
                    'b' => $question->option_b,
                    'c' => $question->option_c,
                    'd' => $question->option_d,
                ],
                'user_answer' => $userAnswer,
                'correct_answer' => $question->correct_answer,
                'explanation' => $question->explanation,
                'reinforcement' => $question->reinforcement,
                'is_correct' => $isCorrect,
            ];
        }

        // hitung nilai
        $total = count($quiz->questions);
        $score = round(($correct / $total) * 100);

        // 🚀 Update progress
        $menuKeys = array_column($this->menus, 'key');
        $currentProgress = array_search($quizKey, $menuKeys) + 1;

        // Hanya buka materi berikutnya jika nilai mencapai KKM
        if ($score >= 75) {

            $menuKeys = array_column($this->menus, 'key');
            $currentProgress = array_search($quizKey, $menuKeys) + 1;

            $progress = \App\Models\Progress::updateOrCreate(
                [
                    'user_id' => auth()->id(),
                ],
                [
                    'progress' => max(($progress->progress ?? 0), $currentProgress)
                ]
            );
        }

        // Auto-save nilai ke database
        \App\Models\StudentQuiz::updateOrCreate(
            [
                'user_id'  => auth()->id(),
                'quiz_key' => $quizKey,
            ],
            [
                'score'    => $score
            ]
        );

        return view('layouts.quizResult', [
            'quiz' => $quiz,
            'score' => $score,
            'results' => $results,
            'quizKey' => $quizKey,
            'menus' => $this->menus,
            'progress' => $progress,
        ]);
    }

    public function evaluasi(Request $request)
    {
        // Tetap di-bypass sesuai kesepakatan alur materi sebelumnya agar langsung lolos kuis
        return response()->json([
            'success' => true,
            'message' => 'Semua jawaban materi benar!'
        ]);
    }

    public function evaluasiView()
    {
        $quizKey = 'evaluasi';
        $progress = Progress::where('user_id', auth()->id())->first();

        $quiz = Quiz::where('key', $quizKey)
            ->with(['questions' => function ($q) {
                $q->orderBy('question_number');
            }])
            ->firstOrFail();

        $existingQuiz = \App\Models\StudentQuiz::where('user_id', auth()->id())
            ->where('quiz_key', $quizKey)
            ->first();

        // JIKA SUDAH PERNAH MENGERJAKAN, TAMPILKAN HASIL
        if ($existingQuiz) {
            $savedAnswers = StudentAnswer::where('user_id', auth()->id())
                ->where('quiz_key', $quizKey)
                ->get()
                ->keyBy('question_id');

            $results = [];
            foreach ($quiz->questions as $question) {
                $savedAnswer = $savedAnswers->get($question->id);
                $userAnswer = $savedAnswer?->answer;
                $isCorrect = $userAnswer !== null && $userAnswer === $question->correct_answer;

                $results[] = [
                    'question' => $question->question,
                    'options' => ['a' => $question->option_a, 'b' => $question->option_b, 'c' => $question->option_c, 'd' => $question->option_d],
                    'user_answer' => $userAnswer,
                    'correct_answer' => $question->correct_answer,
                    'is_correct' => $isCorrect,
                ];
            }

            return view('layouts.quizResult', [
                'quiz' => $quiz,
                'score' => $existingQuiz->score,
                'results' => $results,
                'quizKey' => $quizKey,
                'menus' => $this->menus,
                'progress' => $progress,
            ]);
        }

        // JIKA BELUM PERNAH MENGERJAKAN, TAMPILKAN KUIS BARU
        return view('layouts.quiz', [
            'progress' => $progress,
            'menus' => $this->menus,
            'quizKey' => $quizKey,
            'quiz' => $quiz,
        ]);
    }

    // Tambahkan fungsi baru ini di dalam class QuizController
    public function reset($quizKey)
    {
        $userId = auth()->id();

        // 1. Hapus riwayat kelulusan kuis dari database agar bisa masuk ke form soal kuis kembali
        \App\Models\StudentQuiz::where('user_id', $userId)
            ->where('quiz_key', $quizKey)
            ->delete();

        // 2. Bersihkan juga data session riwayat jawaban kuis lama agar form bersih kembali
        session()->forget('quiz_answers_' . $quizKey);

        // 3. Kembalikan siswa ke halaman pengerjaan soal kuis yang kosong
        return redirect()->route('quiz.show', ['quizKey' => $quizKey]);
    }
}