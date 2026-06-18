<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Sertakan meta tag dan CSS lainnya -->
    <link href="{{ asset('css/utama.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body>
@extends('layouts.dashboard')

@section('content')
<div class="rounded-3 ">
  <div class="w-100">
    <!-- Sidebar: Mulai -->
     
      <!-- Sidebar: Akhir -->

      <!-- Konten Utama: Mulai -->
      <main role="main" class="">
        

            <!-- Accordion untuk aktivitas -->
        <div class="accordion" id="accordionAktivitas">
          <div class="card">
          <div class="px-3">
            <div class="card-header">
            <h5 class="card-title text-center">Kuis</h5>
            </div>
            <div class="evaluasi" id="evaluasi">
            <div class="container">
                <h1>Hasil Kuis</h1>
                <p><strong>Nilai Anda:</strong> {{ $score }}</p>
                @if($score >= 75)
                            <div class="alert alert-success mt-2">
                                🎉 Selamat! Anda telah memahami materi dengan baik.
                            </div>
                        @else
                            <div class="alert alert-danger mt-2">
                                ❗ Anda belum lulus. Silakan pelajari kembali materi.
                            </div>
                        @endif
                <ul class="list-group">
                    @foreach ($results as $result)
                    <li class="list-group-item">
                        <strong>Soal:</strong> {!! $result['question'] !!} <br>
                        @if (isset($result['image']))
                        <div class="my-2">
                            <img src="{{ asset($result['image']) }}" alt="Gambar Soal" class="img-fluid">
                        </div>
                        @endif
                        <strong>Jawaban Anda:</strong> 
                        {{ isset($result['options'][$result['user_answer']]) 
                            ? strtoupper($result['user_answer']) . '. ' . $result['options'][$result['user_answer']] 
                            : 'Tidak Dijawab' }} <br>

                        <strong>Jawaban Benar:</strong> 
                        {{ isset($result['options'][$result['correct_answer']]) 
                            ? strtoupper($result['correct_answer']) . '. ' . $result['options'][$result['correct_answer']] 
                            : '-' }} <br>

                        <strong>Status:</strong> 
                        {!! $result['is_correct'] ? '<span class="text-success">Benar</span>' : '<span class="text-danger">Salah</span>' !!}
                    </li>
                    @endforeach
                </ul>
                <div class="mb-5">

                    @if($quizKey == 'karakteristik')
                        <a href="{{ route('dashboard.karakteristik') }}" class="btn btn-primary mt-3">
                            📘 Kembali ke Materi
                        </a>

                    @elseif($quizKey == 'rekonstruksi')
                        <a href="{{ route('dashboard.rekonstruksi') }}" class="btn btn-primary mt-3">
                            📘 Kembali ke Materi
                        </a>

                    @elseif($quizKey == 'masalah')
                        <a href="{{ route('dashboard.masalah') }}" class="btn btn-primary mt-3">
                            📘 Kembali ke Materi
                        </a>
                    @endif

                    <!-- Tombol Lanjutkan -->
                    @if($score >= 75)
                    <a href="{{ isset($menus[array_search($quizKey, array_column($menus, 'key')) + 1]['route']) ? route($menus[array_search($quizKey, array_column($menus, 'key')) + 1]['route']) : '#' }}" 
                        class="btn btn-success mt-3">
                        ➡️ Lanjutkan
                    </a>
                    @endif

                </div>
            </div>
            </div>

          </div>
          </div>
                <!-- Tambah aktivitas lain sesuai kebutuhan -->
        </div>

        </main>
        <!-- Konten Utama: Akhir -->
    </div>
</div>
@endsection

  <!-- Skrip -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
