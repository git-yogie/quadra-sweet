<ol type="1">
    @foreach($quiz->questions->sortBy('question_number') as $question)
    <li class="mb-4">
        {{-- Ini akan menampilkan teks soal secara otomatis dari database --}}
        {!! $question->question !!}

        {{-- Ini akan menampilkan gambar secara otomatis jika ada --}}
        @if($question->image)
            <img src="{{ asset($question->image) }}" class="img-fluid mt-2 d-block" style="max-width: 300px;" alt="Gambar Soal">
        @endif

        {{-- Ini akan menampilkan pilihan jawaban a sampai d --}}
        <ol type="a" class="mt-3">
            <li>{!! $question->option_a !!}</li>
            <li>{!! $question->option_b !!}</li>
            <li>{!! $question->option_c !!}</li>
            <li>{!! $question->option_d !!}</li>
        </ol>
    </li>
    @endforeach
</ol>