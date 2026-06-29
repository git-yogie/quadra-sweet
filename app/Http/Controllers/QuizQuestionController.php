<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QuizQuestion;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizQuestionController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $questions = QuizQuestion::with('quiz')
            ->when($search, function ($query) use ($search) {
                $query->where('question', 'like', "%{$search}%")
                    ->orWhere('question_number', 'like', "%{$search}%")
                    ->orWhereHas('quiz', function ($q) use ($search) {
                        $q->where('title', 'like', "%{$search}%");
                    });
            })
            ->orderBy('quiz_id')
            ->orderBy('question_number')
            ->paginate(10)
            ->withQueryString();

        return view('pages.settings.bank-soal', compact('questions'));
    }

    public function create()
    {
        $quizzes = Quiz::orderBy('id')->get();

        return view('pages.settings.create-soal', compact('quizzes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'question_number' => 'required|integer|min:1',
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct_answer' => 'required|in:a,b,c,d',
            'explanation' => 'nullable',
            'reinforcement' => 'nullable',

            // Validasi gambar
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('quiz-images', 'public');
        }

        QuizQuestion::create($validated);

        return redirect()
            ->route('bank-soal.index')
            ->with('success', 'Soal berhasil ditambahkan.');
    }

    public function edit(QuizQuestion $question)
    {
        $quizzes = Quiz::all();

        return view(
            'pages.settings.edit-soal',
            compact('question', 'quizzes')
        );
    }

    public function update(Request $request, QuizQuestion $question)
    {
        $validated = $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'question_number' => 'required|integer|min:1',
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct_answer' => 'required|in:a,b,c,d',
            'explanation' => 'nullable',
            'reinforcement' => 'nullable',
        ]);

        $question->update($validated);

        return redirect()
            ->route('bank-soal.index')
            ->with('success', 'Soal berhasil diperbarui.');
    }

    public function destroy(QuizQuestion $question)
    {
        $question->delete();

        return redirect()
            ->route('bank-soal.index')
            ->with('success', 'Soal berhasil dihapus.');
    }
}
