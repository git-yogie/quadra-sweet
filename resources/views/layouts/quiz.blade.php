@extends('layouts.dashboard')

@section('title', 'Quiz ' . ($quiz->title ?? ''))

@push('style')
    <link href="{{ asset('css/utama.css') }}" rel="stylesheet">
    <style>
    /* 1. Kotak Putih Utama (Sticky Header) */
    .quiz-progress-wrapper {
        position: sticky;
        top: 75px;          /* Jarak melayang di bawah navbar utama saat di-scroll */
        z-index: 1050;
        width: 100%;
        max-width: 800px;
        margin: 0 auto 25px auto;
        padding: 15px 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        border: 1px solid #e1e5f2;
        opacity: 1 !important;        
        display: block !important;    
        transition: all 0.4s ease;
    }

    /* 2. Latar Belakang Progress Bar (Kotak Kapsul Abu-abu) */
    .quiz-progress { 
        background-color: #f1f3f9 !important; /* Warna abu-abu background kapsul */
        border: 1px solid #e2e8f0;          /* Garis pinggir tipis agar makin tegas */
        border-radius: 30px !important;     /* Membuat ujungnya melengkung bulat (kapsul) */
        overflow: hidden; 
        height: 24px !important;            /* Mengatur tinggi kotak kapsul */
        display: flex; 
        align-items: center; 
    }

    /* 3. Isi Progress Bar (Warna Hijau/Progress-nya) */
    .quiz-progress-bar { 
        height: 100%; 
        width: 0%; 
        display: flex !important; 
        align-items: center !important; 
        justify-content: center !important; 
        color: #fff !important; 
        background-color: #4cd137 !important; /* Mengunci warna hijau cerah yang estetik */
        font-weight: 700; 
        font-size: 0.85rem; 
        border-radius: 30px !important;     /* Menyeimbangkan kelengkungan di dalam */
        transition: width 0.4s ease; 
    }
    </style>
@endpush

@section('content')
<div class="rounded-3">
    <div class="w-100">
        <main role="main" class="mt-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card border-0 shadow-sm mb-4" style="background: #f8f9ff;">
                <div class="card-body">
                    <p class="mb-2 fw-semibold">📌 Petunjuk Kuis:</p>
                    <ol class="mb-0">
                        <li>Bacalah setiap soal dengan teliti sebelum menjawab.</li>
                        <li>Pilihlah satu jawaban yang paling tepat pada setiap soal.</li>
                        <li>Waktu pengerjaan kuis terbatas, perhatikan timer yang tersedia.</li>
                        <li>Jika waktu habis, jawaban akan otomatis dikumpulkan.</li>
                        <li>Pastikan semua soal telah dijawab sebelum menekan tombol kirim.</li>
                        <li>Periksa kembali jawaban Anda sebelum dikirim.</li>
                        <li>Klik tombol <b>"Kirim Jawaban"</b> untuk menyelesaikan kuis.</li>
                    </ol>
                </div>
            </div>

            <!-- GANTI BAGIAN SEBELUM FORM MULAI DARI H2 SAMPAI DIV WRAPPER MENJADI SEPERTI INI -->

            <div id="quizProgressWrapper" class="quiz-progress-wrapper shadow-sm bg-white p-3 rounded">
                <!-- Judul Kuis ikut masuk ke kontainer melayang -->
                <h4 class="fw-bold text-center mb-2" style="color: #333;">Kuis {{ $quiz->title }}</h4>
                
                <!-- Timer / Waktu tersisa ikut masuk ke kontainer melayang -->
                <div class="alert alert-warning text-center py-1 px-3 mb-2 small fw-semibold" style="max-width: 300px; margin: 0 auto;">
                    ⏱ Waktu tersisa: <span id="timer">60:00</span>
                </div>

                <!-- Progress Bar di bagian bawahnya -->
                <div class="quiz-progress" style="height: 18px;">
                    <div id="quiz-progress-bar" class="quiz-progress-bar bg-primary" style="width: 0%;">0%</div>
                </div>
            </div>

            <form id="quizForm" action="{{ route('quiz.result', ['quizKey' => $quizKey]) }}" method="POST">
            <!-- Sisa kode form ke bawah tetap sama dan jangan diubah -->
                @csrf
                @forelse($quiz->questions as $question)
                    <div class="card my-3 shadow-sm question-card">
                        <div class="card-body">
                            <h5>{{ $loop->iteration }}. {!! $question->question !!}</h5>
                            @if($question->image)
                                <div class="my-3 text-center">
                                    <img src="{{ asset($question->image) }}" alt="Question Image" class="img-fluid rounded shadow-sm" style="max-height: 250px;">
                                </div>
                            @endif

                            @php
                                $options = ['a' => $question->option_a, 'b' => $question->option_b, 'c' => $question->option_c, 'd' => $question->option_d];
                            @endphp

                            @foreach($options as $key => $option)
                                @if($option !== null && $option !== '') 
                                    <div class="form-check my-2">
                                        <input type="radio" name="question_{{ $question->id }}" value="{{ $key }}" id="option_{{ $key }}_{{ $question->id }}" class="form-check-input answer-option">
                                        <label for="option_{{ $key }}_{{ $question->id }}" class="form-check-label">
                                            <strong>{{ strtoupper($key) }}.</strong> {!! $option !!}
                                        </label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning text-center">Belum ada pertanyaan.</div>
                @endforelse

                <div class="text-center my-4">
                    <button type="submit" class="btn btn-primary px-4 py-2">Kirim Jawaban</button>
                </div>
            </form>
        </main>
    </div>
</div>
@endsection

@push('script')
<script>
    window.MathJax = {
        tex: { inlineMath: [['$', '$'], ['\\(', '\\)']], processEscapes: true },
        options: { processHtmlClass: 'container-fluid' }
    };
</script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const progressWrapper = document.getElementById('quizProgressWrapper');
    const progressBar = document.getElementById('quiz-progress-bar');
    const form = document.getElementById('quizForm');
    const totalQuestions = document.querySelectorAll('.question-card').length;

    form.addEventListener('change', updateProgress);

    function updateProgress() {
        const answered = Array.from(document.querySelectorAll('.question-card')).filter(card =>
            Array.from(card.querySelectorAll('input[type=\"radio\"]')).some(opt => opt.checked)
        ).length;

        const percent = Math.round((answered / totalQuestions) * 100);
        progressBar.style.width = percent + '%';
        progressBar.textContent = percent + '%';
        
        progressBar.classList.remove('bg-primary', 'bg-warning', 'bg-success');
        if (percent < 50) progressBar.classList.add('bg-primary');
        else if (percent < 100) progressBar.classList.add('bg-warning');
        else progressBar.classList.add('bg-success');

        if (answered > 0) {
            progressWrapper.classList.remove('d-none');
            setTimeout(() => progressWrapper.classList.add('active'), 100);
        }
    }
});

let timeLeft = 3600; // 60 menit

    const timerElement = document.getElementById("timer");

    const countdown = setInterval(function () {
        let minutes = Math.floor(timeLeft / 60);
        let seconds = timeLeft % 60;

        seconds = seconds < 10 ? "0" + seconds : seconds;

        timerElement.innerHTML = minutes + ":" + seconds;

        timeLeft--;

        // 🔴 Jika sisa waktu 1 menit
        if (timeLeft <= 60) {
            timerElement.style.color = "red";
        }

        // ⏰ Jika waktu habis
        if (timeLeft < 0) {
            clearInterval(countdown);
            alert("Waktu habis! Jawaban akan dikirim otomatis.");
            document.getElementById("quizForm").submit();
        }

    }, 1000);
</script>
@endpush