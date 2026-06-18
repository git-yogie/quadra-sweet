<!DOCTYPE html>
<html lang="id" class="light-style layout-navbar-fixed layout-wide " dir="ltr" data-theme="theme-default" data-assets-path="/assets/" data-template="front-pages">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>QuadraLearn</title>

    <meta name="description" content="Media Pembelajaran Interaktif Berbasis Web pada Materi Fungsi Kuadrat Kelas X dengan Model Tutorial" />
    <meta name="keywords" content="quadralearn, fungsi kuadrat, media pembelajaran interaktif, 404 Not Found Indonesia">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('fk.PNG') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" class="template-customizer-core-css" href="{{ asset('assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" class="template-customizer-theme-css" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page.css') }}" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page-landing.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('assets/js/front-config.js') }}"></script>

    <!-- STYLING KHUSUS NUANSA MATEMATIKA -->
    <style>
      /* Background Grid Matematika (Kartesius) */
      .landing-hero {
        background-color: #f7f8fc;
        background-image: 
          linear-gradient(rgba(108, 92, 231, 0.05) 1.5px, transparent 1.5px),
          linear-gradient(90deg, rgba(108, 92, 231, 0.05) 1.5px, transparent 1.5px);
        background-size: 40px 40px;
        background-position: center;
        overflow: hidden;
      }

      /* Efek Melayang Lambat */
      @keyframes floatAnimation {
        0% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(3deg); }
        100% { transform: translateY(0px) rotate(0deg); }
      }

      @keyframes floatReverseAnimation {
        0% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(12px) rotate(-3deg); }
        100% { transform: translateY(0px) rotate(0deg); }
      }

      /* Elemen Dekoratif Rumus Matematika */
      .math-formula-overlay {
        position: absolute;
        font-family: 'Times New Roman', Times, serif;
        font-style: italic;
        font-weight: bold;
        color: rgba(108, 92, 231, 0.55); /* Sangat samar agar estetik */
        user-select: none;
        pointer-events: none;
        z-index: 1;
      }

      .formula-left {
        top: 25%;
        left: 8%;
        font-size: 3.5rem;
        animation: floatAnimation 6s ease-in-out infinite;
      }

      .formula-right {
        bottom: 25%;
        right: 8%;
        font-size: 3.5rem;
        animation: floatReverseAnimation 7s ease-in-out infinite;
      }

      /* Hiasan Parabola SVG */
      .parabola-decor {
        position: absolute;
        opacity: 0.70;
        pointer-events: none;
        z-index: 1;
      }

      .parabola-decor-left {
        left: 5%;
        bottom: 15%;
        animation: floatReverseAnimation 8s ease-in-out infinite;
      }

      .parabola-decor-right {
        right: 5%;
        top: 15%;
        animation: floatAnimation 8s ease-in-out infinite;
      }

      /* Style Tambahan untuk Formula di Judul */
      .math-title-inline {
        font-family: 'Times New Roman', Times, serif;
        font-style: italic;
        white-space: nowrap;
      }
    </style>
</head>

<body>

<script src="{{ asset('assets/vendor/js/dropdown-hover.js') }}"></script>
<script src="{{ asset('assets/vendor/js/mega-dropdown.js') }}"></script>

<!-- Navbar: Start -->
<nav class="layout-navbar shadow-none py-0">
  <div class="container">
    <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
      <!-- Menu logo wrapper: Start -->
      <div class="navbar-brand app-brand demo d-flex py-0 me-4">
        <!-- Mobile menu toggle: Start-->
        <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="tf-icons bx bx-menu bx-sm align-middle"></i>
        </button>
        <!-- Mobile menu toggle: End-->
        <a href="#landingHero" class="app-brand-link">
          <span class="app-brand-logo demo">
            <img src="{{ asset('fk.PNG') }}" alt="QuadraLearn Logo" width="30" style="border-radius: 150px" srcset="">
          </span>
          <span class="app-brand-text menu-text fw-bold ms-2 ps-1">QuadraLearn</span>
        </a>
      </div>
      <!-- Menu logo wrapper: End -->
      
      <!-- Menu wrapper: Start -->
      <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
        <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="tf-icons bx bx-x bx-sm"></i>
        </button>
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link fw-medium" aria-current="page" href="#landingHero">Dashboard</a>
          </li>
    
          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link dropdown-toggle" id="kompetensiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kompetensi
            </a>
            <ul class="dropdown-menu" aria-labelledby="kompetensiDropdown">
              <li><a class="dropdown-item" href="{{ route('indikator') }}">Indikator Capaian</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="javascript:void(0)" class="nav-link dropdown-toggle" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Informasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
              <li><a class="dropdown-item" href="{{ route('profil') }}">Profil</a></li>
              <li><a class="dropdown-item" href="{{ route('petunjuk') }}">Petunjuk Aplikasi</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="landing-menu-overlay d-lg-none"></div>
      <!-- Menu wrapper: End -->
      
      <!-- Toolbar: Start -->
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- navbar button: Start -->
        <li>
          <a href="{{ route('login') }}" class="btn btn-primary">
            <span class="tf-icons bx bx-user me-md-1"></span>
            @guest
              <span class="d-none d-md-block">Masuk</span>
            @else
              <span class="d-none d-md-block">{{ auth()->user()->name }}</span>
            @endguest
          </a>
        </li>
        <!-- navbar button: End -->
      </ul>
      <!-- Toolbar: End -->
    </div>
  </div>
</nav>
<!-- Navbar: End -->


<!-- Sections:Start -->

<div data-bs-spy="scroll" class="scrollspy-example">
  <!-- Hero: Start -->
  <section id="hero-animation">
    <div id="landingHero" class="section-py landing-hero position-relative">
      
      <!-- ELEMEN DEKORATIF MATEMATIKA (SAMAR) -->
      <div class="math-formula-overlay formula-left d-none d-md-block">
        y = ax² + bx + c
      </div>
      <div class="math-formula-overlay formula-right d-none d-md-block">
        D = b² - 4ac
      </div>

      <!-- DEKORASI KURVA PARABOLA (KIRI - TERBUKA KE ATAS) -->
      <div class="parabola-decor parabola-decor-left d-none d-md-block">
        <svg width="120" height="120" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10 20 Q50 90 90 20" stroke="#6c5ce7" stroke-width="4" stroke-linecap="round"/>
          <line x1="50" y1="10" x2="50" y2="90" stroke="#6c5ce7" stroke-width="1.5" stroke-dasharray="4 4"/>
          <line x1="10" y1="55" x2="90" y2="55" stroke="#6c5ce7" stroke-width="1.5" stroke-dasharray="4 4"/>
          <text x="53" y="18" fill="#6c5ce7" font-size="10" font-family="Times New Roman" font-style="italic">y</text>
          <text x="88" y="52" fill="#6c5ce7" font-size="10" font-family="Times New Roman" font-style="italic">x</text>
          <text x="35" y="98" fill="#6c5ce7" font-size="9" font-family="sans-serif">a > 0</text>
        </svg>
      </div>

      <!-- DEKORASI KURVA PARABOLA (KANAN - TERBUKA KE BAWAH) -->
      <div class="parabola-decor parabola-decor-right d-none d-md-block">
        <svg width="120" height="120" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10 80 Q50 10 90 80" stroke="#e17055" stroke-width="4" stroke-linecap="round"/>
          <line x1="50" y1="10" x2="50" y2="90" stroke="#e17055" stroke-width="1.5" stroke-dasharray="4 4"/>
          <line x1="10" y1="45" x2="90" y2="45" stroke="#e17055" stroke-width="1.5" stroke-dasharray="4 4"/>
          <text x="53" y="18" fill="#e17055" font-size="10" font-family="Times New Roman" font-style="italic">y</text>
          <text x="88" y="42" fill="#e17055" font-size="10" font-family="Times New Roman" font-style="italic">x</text>
          <text x="35" y="95" fill="#e17055" font-size="9" font-family="sans-serif">a < 0</text>
        </svg>
      </div>

      <div class="container position-relative" style="z-index: 2;">
        <div class="hero-text-box text-center">
          <!-- MODIFIKASI JUDUL DENGAN FORMULA TEKS MATEMATIS -->
          <h1 class="text-primary hero-title display-4 fw-bold">
            Belajar Fungsi Kuadrat <br class="d-md-none"> </span> <br class="d-md-none"> dengan Cermat
          </h1>
          <h2 class="hero-sub-title h6 mb-4 pb-1">
            Media Pembelajaran Interaktif Berbasis Web <br class="d-none d-lg-block" /> Pada Materi Fungsi Kuadrat Kelas X Dengan Model Tutorial
          </h2>
          <div class="landing-hero-btn d-inline-block position-relative">
            <a href="{{url('dashboard')}}" class="btn btn-primary btn-lg px-5 py-3 shadow rounded-pill">
              Mulai belajar!
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>  
</div>

<!-- @yield('content') -->
  
  <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script> 


  <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('assets/js/front-main.js') }}"></script> 

  <!-- Page JS -->
  <script src="{{ asset('assets/js/front-page-landing.js') }}"></script> 
  <script>
       function checkHash() {
        if (window.location.hash === '#tujuan-pembelajaran') {
            document.getElementById('tujuaan-pembelajaran-component').style.display = 'block';
            console.log('tujuan pembelajaran');
            
        } else {
            document.getElementById('tujuaan-pembelajaran-component').style.display = 'none';
        }
    }

    // Check the URL when the page loads
    window.onload = checkHash;

    // Also handle hash changes dynamically without a page reload
    window.onhashchange = checkHash;
    </script>
  
</body>

</html>