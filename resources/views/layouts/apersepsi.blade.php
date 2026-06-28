<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Sertakan meta tag dan CSS lainnya -->
    <link href="{{ asset('css/utama.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar: Mulai -->
      <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <i class="bi bi-house-door"></i> Beranda
              </a>
                </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-book"></i> Apersepsi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/karakteristik">
                <i class="bi bi-journal"></i> Karakteristik Fungsi Kuadrat
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-layers"></i> Rekonstruksi Fungsi Kuadrat
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-layers"></i> Menyelesaikan Masalah Dengan Fungsi Kuadrat
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="bi bi-clipboard-data"></i> Evaluasi
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Sidebar: Akhir -->

      <!-- Konten Utama: Mulai -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Quadra-Learn</h1>
        </div>

      <!-- Tujuan Pembelajaran -->
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Pendahuluan</h5>
            <div class="konten-justify">
              <p style="text-align: justify !important;">Sebelum mulai pelajaran hari ini, pernahkah kalian membayangkan seperti apa
                lintasan saat melemparkan bola ke udara. Apa yang dapat diperhatikan tentang
                gerakan bola tersebut? Benar, bola ketika dilemparkan ke udara akan bergerak naik
                sampai mencapai titik tertinggi, lalu kembali turun. Lintasan gerakan ini sebenarnya
                bisa kita gambarkan menggunakan sebuah persamaan matematika yang disebut
                sebagai fungsi kuadrat. Fungsi kuadrat sangat penting dalam banyak aspek
                kehidupan, mulai dari olahraga hingga teknik. Hari ini, kita akan mempelajari
                bagaimana menentukan karakteristik, mengkonstruksi serta menyelesaikan
                masalah dalam fungsi kuadrat. Siapakah di sini yang pernah menggunakan atau
                mengetahui fungsi kuadrat yang berkaitan dalam kehidupan sehari-hari, selain
                lintasan saat melemparkan bola ke udara tadi?</p>
              <p style="text-align: justify !important;">Pernahkah kalian mengamati gerakan seorang yang mengikuti olahraga lompat
                jauh? Ketika kita memulai lompat jauh yang diawali dengan melompat
                menggunakan teknik dan mencapai jarak sejauh mungkin. Maka lintasan gerakan
                lompat jauh tersebut berbentuk parabola. Seperti pada gambar di bawah ini:</p>
                <img src="{{ asset('assets/img/lompat_jauh.jpg') }}" alt="Deskripsi Gambar" style="display: block; margin: 0 auto; width: 30%; max-width: 100%;">
                
              <p style="text-align: justify !important;">Selain lompat jauh, penerapan fungsi kuadrat dalam kehidupan sehari-hari
                sangat banyak, di antaranya: lintasan bola basket, lintasan sepakbola, gerakan lompat tinggi, air yang keluar dari selang, 
                lalu bentuk bangunan, dan jembatan. Semua hal ini membentuk kurva parabola.</p>
              <p style="text-align: justify !important;">Parabola merupakan bentuk fungsi kuadrat dalam grafik. Fungsi kuadrat adalah
                fungsi polinom (suku banyak) dengan pangkat tertinggi variabelnya adalah 2. Fungsi kuadrat adalah sebuah fungsi matematika, 
                yang dinyatakan dalam bentuk persamaan, yaitu persamaan yang memiliki bentuk umum \( f(x) = ax^2 + bx + c \) dimana a, b, dan c 
                adalah konstanta-konstanta tertentu dan x adalah variable independent. Gambar berikut ini menunjukkan grafik fungsi kuadrat. 
                Posisi bola merupakan posisi titik dalam sistem koordinat.</p>
                <img src="{{ asset('assets/img/grafik_fk.png') }}" alt="Deskripsi Gambar" style="display: block; margin: 0 auto; width: 30%; max-width: 100%;">
            </div>
          </div>
        </div>

            <!-- Accordion untuk aktivitas -->
        <div class="accordion" id="accordionAktivitas">
          <div class="card">
            <div class="card-header" id="headingSatu">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSatu" aria-expanded="true" aria-controls="collapseSatu">
                    <img src="assets/img/ayo_mengingat_kembali.png" alt="icon" class="icon" width="100" height="50">
                </button>
                <p style="text-align: justify !important; font-size: 15px;">Persamaan kuadrat dengan \( f(x) = ax^2 + bx + c \) dapat diselesaikan dengan berbagai cara antara lain dengan: 
                  faktorisai, melengkapkan kuadrat, dan menggunakan rumus kuadrat (rumus abc).</p>
              </h2>
            </div>
            <div class="mengingat" id="mengingat">
              <ol type>
                <li>
                  Faktorisasi merupakan cara mencari penyelesaian dari persamaan kuadrat dengan mencari nilai yang jika dikalikan, maka akan menghasilkan nilai lain. Contoh:
                  $$ f(x)=x^2-5x+6 $$
                  $$ 0=x^2-5x+6 $$
                  $$ x^2-5x+6=0 $$
                  $$ (x-2)(x-3)=0 $$
                  $$ x = 2 \quad \text{atau} \quad x = 3 $$
                </li>
                <li>
                  Kuadrat sempurna, adalah cara untuk menyelesaikan persamaan kuadrat dengan melengkapkan kuadratnya sehingga menjadi sempurna.
                  Penyelesaian persamaan kuadrat dengan kuadrat sempurna menggunakan rumus berikut \( (x+p)^2=x^2+2px+p^2 \) lalu dapat diubah
                  dalam bentuk persamaan berikut:
                  $$ (x+p)^2=q $$
                  $$ x+p= \pm \sqrt{q} $$
                  $$ x=-p \pm \sqrt{q} $$
                  Contoh:
                  $$ x^2+6x+5=0 $$
                  Ubah menjadi \( x^2+6x=-5 \)
                  Tambahkan satu angka di ruas kiri dan kanan agar menjadi kuadrat sempurna. Penambahan angka ini diambil dari separuh angka
                  koefisien dari x atau separuhnya 6 yang dikuadratnya yakni \( 3^2=9. \)
                  Jadi:
                  $$ x^2+6x+9=-5+9 $$
                  $$ x^2+6x+9=4 $$
                  $$ (x+3)^2=4 $$
                  $$ (x+3)= \sqrt{4} $$
                  $$ x+3= \pm 2 $$
                  \begin{align*}
                  \text{Kemudian, untuk } x + 3 = 2, \text{ maka:} \quad &x = 2 - 3 = -1 \\
                  \text{Untuk } x + 3 = -2, \text{ maka:} \quad &x = -2 - 3 = -5 \\
                  \text{Jadi, penyelesaiannya adalah } x = -1 \text{ atau } x = -5.
                  \end{align*}
                </li>
                <li>
                  Menggunakan rumus kuadrat atau biasa dikenal dengan rumus abc.
                  Contoh:
                  $$ x^2+4x-12=0 $$
                  $$ a=1, b=4, c=-12 $$
                  $$ x_{1,2}= \frac{-b \pm \sqrt{b^2 - 4ac}}{2.a} $$
                  $$ x= \frac{-4 \pm \sqrt{4^2-4.1.(-12)}}{2.1} $$
                  $$ x= \frac{-4 \pm \sqrt{16+48}}{2.1} $$
                  $$ x= \frac{-4 \pm \sqrt{64}}{2} $$
                  $$ x= \frac{-4 \pm 8}{2} $$
                  $$ x_{1}= \frac{-4+8}{2}=2 \quad \text{atau} \quad x_{2}= \frac{-4-8}{2}=-6 $$
                  \begin{aligned}
                  \text{Jadi, penyelesaiannya adalah} \quad x=2 \quad \text{atau} \quad x=-6
                  \end{aligned}
                </li>
              </ol>
            </div>
          </div>
          <a href="{{ url('/karakteristik') }}" class="btn btn-primary">Lanjut ke Fungsi Kuadrat</a>
        </div>

        </main>
        <!-- Konten Utama: Akhir -->
    </div>
</div>
@endsection

  @yield('content')
  <!-- Skrip -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
