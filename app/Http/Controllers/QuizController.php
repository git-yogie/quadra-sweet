<?php

namespace App\Http\Controllers;

use App\Models\AnswerKey;
use App\Models\Progress;
use App\Models\Quiz;
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
        // PENGATURAN TAMPILAN: JIKA SUDAH LULUS KKM (>= 75)
        // =========================================================
        $existingQuiz = \App\Models\StudentQuiz::where('user_id', auth()->id())
            ->where('quiz_key', $quizKey)
            ->first();

        if ($existingQuiz && $existingQuiz->score >= 75) {
            
            // Siapkan review jawaban siswa default (disamakan dengan struktur fungsi result)
            $results = [];
            foreach ($quiz->questions as $question) {
                $results[] = [
                    'question' => $question->question,
                    'options' => [
                        'a' => $question->option_a,
                        'b' => $question->option_b,
                        'c' => $question->option_c,
                        'd' => $question->option_d,
                    ],
                    'user_answer' => null, // Set default null karena detail pilihan siswa per nomor tidak disimpan di database
                    'correct_answer' => $question->correct_answer,
                    'is_correct' => false,
                ];
            }

            // Langsung tampilkan halaman HASIL KUIS jika sudah lulus
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

        // JIKA BELUM LULUS / BELUM PERNAH KERJA, TAMPILKAN SOAL KOSONG
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

        // ✅ Hitung skor
        $correct = 0;
        $results = [];

        foreach ($quiz->questions as $question) {
            $field = 'question_' . $question->id;

            // ambil dari request
            $userAnswer = $request->input($field);

            $isCorrect = $userAnswer !== null && $userAnswer === $question->correct_answer;

            if ($isCorrect) {
                $correct++;
            }

            $results[] = [
                'question' => $question->question,
                'options' => [
                    'a' => $question->option_a,
                    'b' => $question->option_b,
                    'c' => $question->option_c,
                    'd' => $question->option_d,
                ],
                'user_answer' => $userAnswer,
                'correct_answer' => $question->correct_answer,
                'is_correct' => $isCorrect,
            ];
        }

        // hitung nilai
        $total = count($quiz->questions);
        $score = round(($correct / $total) * 100);

        // 🚀 Update progress
        $menuKeys = array_column($this->menus, 'key');
        $currentProgress = array_search($quizKey, $menuKeys) + 1;

        // =========================================================
        // FIX 1: UPDATE ATAU BUAT OTOMATIS PROGRESS JIKA BELUM ADA
        // =========================================================
        $progress = \App\Models\Progress::updateOrCreate(
            [
                'user_id'  => auth()->id(),
            ],
            [
                // Progres hanya naik jika tingkatan kuis lebih tinggi dari progres saat ini
                'progress' => max(($progress->progress ?? 0), $currentProgress)
            ]
        );

        // =========================================================
        // FIX 2: AUTO-SAVE NILAI KE DATABASE NYATA
        // =========================================================
        \App\Models\StudentQuiz::updateOrCreate(
            [
                'user_id'  => auth()->id(),
                'quiz_key' => $quizKey,
            ],
            [
                'score'    => $score
            ]
        );
        // =========================================================

        return view('layouts.quizResult', [
            'quiz' => $quiz,
            'score' => $score,
            'results' => $results,
            'quizKey' => $quizKey,
            'menus' => $this->menus,
            'progress' => $progress, // Variabel progress baru yang sudah ter-update
        ]);
    }

    public function evaluasi(Request $request)
    {
        $answers = AnswerKey::query()
            ->whereIn('code', array_keys($request->all()))
            ->get();

        foreach ($answers as $a) {
            if ($request->input($a->code) != $a->answer) {
                throw ValidationException::withMessages([
                    $a->code => ['Jawaban salah'],
                ]);
            }
        }

        return response()->json(['message' => 'Semua jawaban benar!']);
    }

    public function evaluasiView()
    {
        $progress = Progress::where('user_id', auth()->id())->first();

        $quiz = Quiz::where('key', 'evaluasi')
            ->with(['questions' => function ($q) {
                $q->orderBy('question_number');
            }])
            ->firstOrFail();

        // =========================================================
        // PROTEKSI TAMBAHAN JIKA EVALUASI JUGA INGIN DI-LOCK SETELAH LULUS
        // =========================================================
        $existingQuiz = \App\Models\StudentQuiz::where('user_id', auth()->id())
            ->where('quiz_key', 'evaluasi')
            ->first();

        if ($existingQuiz && $existingQuiz->score >= 75) {
            $results = [];
            foreach ($quiz->questions as $question) {
                $results[] = [
                    'question' => $question->question,
                    'options' => [
                        'a' => $question->option_a,
                        'b' => $question->option_b,
                        'c' => $question->option_c,
                        'd' => $question->option_d,
                    ],
                    'user_answer' => null,
                    'correct_answer' => $question->correct_answer,
                    'is_correct' => false,
                ];
            }

            return view('layouts.quizResult', [
                'quiz' => $quiz,
                'score' => $existingQuiz->score,
                'results' => $results,
                'quizKey' => 'evaluasi',
                'menus' => $this->menus,
                'progress' => $progress,
            ]);
        }
        // =========================================================

        return view('layouts.quiz', [
            'progress' => $progress,
            'menus' => $this->menus,
            'quizKey' => 'evaluasi',
            'quiz' => $quiz,
        ]);
    }
}