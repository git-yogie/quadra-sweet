@extends('layouts.dashboard')

@section('content')
<div class="rounded-3 ">
  <div class="w-100">
  

      <!-- Konten Utama: Mulai -->
      <main role="main" class="">
       

      <!-- Tujuan Pembelajaran -->
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Rekonstruksi Fungsi Kuadrat</h5>
            <div class="konten-justify">
              <div id="content" class="accordion">
                <div class="accordion-item">
                  <h2 class="mb-0 accordion-header" id="headingSatu">
                    <button class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseSatu"
                      aria-expanded="false"
                      aria-controls="collapseSatu"
                    >
                    <img src="{{ asset('assets/img/app/tujuan-pembelajaran.png') }}" alt="icon" class="icon" width="200" height="80">

                    </button>
                  </h2>
                  <div 
                    id="collapseSatu"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingSatu"
                    data-bs-parent="#content"
                  >
                    <div class="accordion-body">
                      @include('pages.materi.rekonstruksi.tujuan')
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

            <!-- Accordion untuk aktivitas -->
        <div class="accordion" id="accordionAktivitas">
          <div class="card">
          <div class="px-3">
            <div class="mengingat" id="mengingat">
              <p style="padding: 0 30px;" class="mt-3">
                &nbsp;&nbsp;&nbsp;&nbsp; Mengonstruksi fungsi kuadrat berarti menyusun atau membentuk
                persamaan kuadrat berdasarkan informasi tertentu yang diberikan. Informasi
                ini bisa berupa titik-titik yang dilalui oleh kurva kuadrat, titik puncak, atau titik
                potong dengan sumbu \( x \) dan \( y \). Secara umum, untuk dapat menyusun suatu
                fungsi kuadrat adalah sebagai berikut:
              </p>
              <ol type="a">
                <li>
                Diketahui tiga buah titik sebarang dan berlainan, yaitu titik \( (x_{1},y_{1}), (x_{2},y_{2}) \)
                dan \( (x_{3},y_{3}) \), dengan ketiga titik tersebut dapat menemukan persamaan
                kuadrat <mark>\( y = ax_{2} + bx + c \)</mark> dengan menyusun sistem pesamaan linear:
                  <div class="d-flex flex-row justify-content-center" style="padding: 0;">
                    <span style="font-size: 6.75rem;" class=me-1>
                      {
                    </span>
                      <div class="flex-col mt-2 fs-5">
                        $$ ax_{1}^2 + bx_{1} + c = y_{1} $$
                        $$ ax_{2}^2 + bx_{2} + c = y_{2} $$
                        $$ ax_{3}^2 + bx_{3} + c = y_{3} $$
                      </div>
                  </div>
                </li>
                <li>
                  Diketahui titik potong dengan sumbu \( -x: (x_{1},0) \) dan \( (x_{2},0) \) dan satu titik
                  sebarang: \( (x_{3},y_{3}) \), dengan mengetahui dua titik potong dengan sumbu \(x\) dan
                  satu titik lain, maka kita dapat menggunakan bentuk faktor dari persamaan
                  kuadrat yaitu:

                  $$ \colorbox{#fff3b0}{$y = a(x - x_{1})(x - x_{2})$} $$

                  Kemudian, substitusi titik \( (x_{3}, y_{3}) \) untuk menemukan \(a\):

                  $$ \colorbox{#fff3b0}{$y_{3} = a(x_{3} - x_{1})(x_{3} - x_{2})$} $$

                  Dengan persamaan ini kita dapat mengetahui nilai \(a\), dan dapat membentuk
                  persamaan kuadrat lengkap.
                </li>
                <li class="mt-3">
                  Diketahui titik puncak (titik ekstrim): \( (ℎ, 𝑘) \), dan satu titik sebarang: \( (x_{1} ,
                  y_{2}) \), dalam hal ini kita dapat menggunakan bentuk vertex dari persamaan
                  kuadrat:

                  $$ \colorbox{#fff3b0}{$y = a(x - ℎ)^2 + 𝑘$} $$

                  Kemudian, substitusi titik \( (x_{1}, y_{1}) \) untuk menemukan \(a\):

                  $$ \colorbox{#fff3b0}{$y_{1} = a(x_{1} - ℎ)^2 + 𝑘$} $$

                </li>
              </ol>
              <div class="card border-0 shadow-sm mb-4" style="background: #f8f9ff;">
                <div class="card-body">
                  <p class="mb-2 fw-semibold">📌 Petunjuk Kegiatan:</p>
                  <ol class="mb-0">
                    <li>Pahamilah tiga kondisi dan rumus dasar rekonstruksi fungsi kuadrat di atas dengan teliti.</li>
                    <li>Amati langkah-langkah pengerjaan pada bagian contoh soal rekonstruksi yang disediakan.</li>
                    <li>Lengkapi bagian yang rumpang (kolom kosong) pada contoh soal untuk memahami alur perhitungannya.</li>
                    <li>Terapkan konsep tersebut untuk menyelesaikan latihan soal rekonstruksi yang diberikan.</li>
                    <li>Pastikan semua jawaban rumpang telah terisi dengan benar.</li>
                    <li>Klik tombol kirim jawaban untuk menyelesaikan kegiatan.</li>
                  </ol>
                </div>
              </div>
                @include('pages.materi.rekonstruksi.contoh')
                @include('pages.materi.rekonstruksi.latihan')
            </div>
          </div>
          </div>

        </div>

        </main>
        <!-- Konten Utama: Akhir -->
    </div>
</div>
@endsection

@push('script')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
  <script>
    // Fungsi untuk me-render ulang MathJax jika konten dimuat dinamis
    window.MathJax = {
      tex: {
        inlineMath: [['$', '$'], ['\\(', '\\)']],
        processEscapes: true
      }
    };
    
    // Paksa MathJax memindai ulang seluruh halaman setelah script siap
    if (window.MathJax && window.MathJax.typeset) {
      window.MathJax.typeset();
    }
  </script>
@endpush