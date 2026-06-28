@extends('layouts.dashboard')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Edit Soal</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('bank-soal.update',$question->id) }}"
            method="POST"
            enctype="multipart/form-data">

        @csrf
        @method('PUT')

            <div class="mb-3">
                <label class="form-label">Kuis</label>

                <select name="quiz_id" class="form-control">
                    @foreach($quizzes as $quiz)
                        <option value="{{ $quiz->id }}"
                            {{ old('quiz_id', $question->quiz_id) == $quiz->id ? 'selected' : '' }}>
                            {{ $quiz->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Soal</label>
                <input type="number"
                    name="question_number"
                    class="form-control"
                    value="{{ old('question_number', $question->question_number) }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Pertanyaan</label>
                <textarea name="question"
                        rows="4"
                        class="form-control"
                        required>{{ old('question', $question->question) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar (Opsional)</label>
                <input type="file"
                    name="image"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Pilihan A</label>
                <input type="text"
                    name="option_a"
                    class="form-control"
                    value="{{ old('option_a', $question->option_a) }}"
                    required>
            </div>

            <div class="mb-3">
                <label>Pilihan B</label>
                <input type="text"
                    name="option_b"
                    class="form-control"
                    value="{{ old('option_b', $question->option_b) }}"
                    required>
            </div>

            <div class="mb-3">
                <label>Pilihan C</label>
                <input type="text"
                    name="option_c"
                    class="form-control"
                    value="{{ old('option_c', $question->option_c) }}"
                    required>
            </div>

            <div class="mb-3">
                <label>Pilihan D</label>
                <input type="text"
                    name="option_d"
                    class="form-control"
                    value="{{ old('option_d', $question->option_d) }}"
                    required>
            </div>

            <div class="mb-3">
                <label>Jawaban Benar</label>

                <select name="correct_answer" class="form-select">

                <option value="a"
                    {{ old('correct_answer', $question->correct_answer) == 'a' ? 'selected' : '' }}>
                    A
                </option>

                <option value="b"
                    {{ old('correct_answer', $question->correct_answer) == 'b' ? 'selected' : '' }}>
                    B
                </option>

                <option value="c"
                    {{ old('correct_answer', $question->correct_answer) == 'c' ? 'selected' : '' }}>
                    C
                </option>

                <option value="d"
                    {{ old('correct_answer', $question->correct_answer) == 'd' ? 'selected' : '' }}>
                    D
                </option>

            </select>
            </div>

            <div class="mb-3">
                <label>Penjelasan</label>
                <textarea name="explanation"
                        rows="4"
                        class="form-control">{{ old('explanation', $question->explanation) }}</textarea>
            </div>

            <div class="mb-3">
                <label>Penguatan Konsep</label>
                <textarea name="reinforcement"
                        rows="4"
                        class="form-control">{{ old('reinforcement', $question->reinforcement) }}</textarea>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">
                    <i class="bx bx-save"></i> Simpan Soal
                </button>

                <a href="{{ route('bank-soal.index') }}" class="btn btn-secondary">
                    Batal
                </a>
            </div>

        </form>

    </div>
</div>

@endsection