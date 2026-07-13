@extends('layouts.dashboard')

@section('content')
<div class="rounded-3">
  <div class="w-100">
   

      <main role="main" class="">
        

      <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Menyelesaikan Masalah Dengan Fungsi Kuadrat</h5>
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
                       <img src="{{ asset('assets/img/app/tujuan-pembelajaran.png') }}" alt="" class="icon" width="200" height="80">
                    </button>
                  </h2>
                  <div 
                    id="collapseSatu"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingSatu"
                    data-bs-parent="#content"
                  >
                    <div class="accordion-body">
                      @include('pages.materi.masalah.tujuan')
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

            <div class="accordion" id="accordionAktivitas">
          <div class="card">
          <div class="px-3">
            <div class="card-header">
              
            </div>
            <div class="mengingat" id="mengingat">
              <p style="padding: 0 30px;">
                Menyelesaikan masalah dengan fungsi kuadrat artinya menggunakan fungsi
                kuadrat untuk memodelkan, menganalisis, dan menemukan solusi untuk
                berbagai jenis masalah dalam konteks matematika atau aplikasi dunia nyata.
                Berikut ini adalah beberapa contoh bagaimana penggunaan fungsi kuadrat
                untuk menyelesaikan masalah yaitu:
              </p>
              <ol type="a">
                <li>
                  Menentukan titik maksimum dan minimum, ini berguna dalam optimisasi.
                  Misalnya untuk mencari keuntungan maksimal dan biaya minimal yang
                  dikeluarkan
                </li>
                <li>
                  Menentukan akar-akar persamaan, ini berguna dalam hal yang melibatkan
                  waktu jatuh suatu benda, titik potong lintasan objek, dan lain sebagainya
                </li>
                <li>
                  Memodelkan fenomena alam, ini berguna dalam hal ketika lintasan benda
                  yang dilempar atau bentuk kabel jembatan yang menyerupai parabola.
                </li>
                <li>
                  Analisis keuangan, ini berkaitan dengan memodelkan dan memprediksi
                  kinerja investasi, seperti harga saham atau hasil investasi.
                </li>
                <li>
                  Geometris, berkaitan dengan menemukan area maksimum atau minimum
                  suatu bentuk, serta jarak terpendek antar dua titik pada kurva parabola.
                </li>
              </ol>
              <div class="card border-0 shadow-sm mb-4" style="background: #f8f9ff;">
                <div class="card-body">
                  <p class="mb-2 fw-semibold">📌 Petunjuk Kegiatan:</p>
                  <ol class="mb-0">
                    <p>Ikutilah langkah-langkah berikut secara berurutan</p>
                    <li>Pahamilah konsep pemodelan fungsi kuadrat dan rumus mencari nilai optimum (maksimum/minimum) di atas dengan teliti.</li>
                    <li>Amati langkah-langkah pemecahan masalah kontekstual pada bagian contoh soal cerita yang disediakan.</li>
                    <li>Lengkapi bagian yang rumpang (kolom kosong) pada contoh soal untuk memahami alur penerapan rumusnya.</li>
                    <li>Terapkan strategi pemodelan tersebut untuk menyelesaikan latihan soal cerita kontekstual yang diberikan.</li>
                    <li>Isilah nilai variabel, hasil perhitungan, atau kesimpulan cerita pada kolom jawaban berdasarkan hasil analisis mandirimu.</li>
                    <li>Pastikan semua jawaban rumpang telah terisi dengan benar.</li>
                    <li>Klik tombol kirim jawaban untuk menyelesaikan kegiatan pembelajaran.</li>
                  </ol>
                </div>
              </div>

              <div id="wrapper-contoh" class="mb-4">
                @include('pages.materi.masalah.contoh')
                <div class="d-flex justify-content-center my-3">
                  <button type="button" class="btn text-white px-4 py-2" id="btnCekContoh" 
                    style="background-color: #696cff; border-color: #696cff; border-radius: 6px; font-size: 0.9rem; font-weight: 500;"
                    onmouseover="this.style.backgroundColor='#5f61e6'; this.style.borderColor='#5f61e6';" 
                    onmouseout="this.style.backgroundColor='#696cff'; this.style.borderColor='#696cff';">
                    Cek Jawaban Contoh
                  </button>
                </div>
              </div>

              <div id="wrapper-latihan" class="mb-4">
                @include('pages.materi.masalah.latihan')
                <div class="d-flex justify-content-center my-3">
                  <button type="button" class="btn text-white px-4 py-2" id="btnCekLatihan" 
                    style="background-color: #696cff; border-color: #696cff; border-radius: 6px; font-size: 0.9rem; font-weight: 500;"
                    onmouseover="this.style.backgroundColor='#5f61e6'; this.style.borderColor='#5f61e6';" 
                    onmouseout="this.style.backgroundColor='#696cff'; this.style.borderColor='#696cff';">
                    Cek Jawaban Latihan
                  </button>
                </div>
              </div>

            </div>
          </div>

          </div>
        </div>

        </main>
        </div>
</div>
@endsection

@push('script')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
  <script>
    window.MathJax = {
      tex: {
        inlineMath: [['$', '$'], ['\\(', '\\)']],
        processEscapes: true
      }
    };
    if (window.MathJax && window.MathJax.typeset) {
      window.MathJax.typeset();
    }

    document.addEventListener("DOMContentLoaded", function() {
      // DAFTAR KUNCI JAWABAN SUB-BAB 3
      const jawabanContoh = {
        "sol1": "15", "sol2": "-4.9", "sol3": "-15", "sol4": "-9.8", "sol5": "1.53", "sol6": "1.53"
      };

      const jawabanLatihan = {
        // --- Soal 1: Bengkel Mobil ---
        "latih1": "-5", "latih2": "100", "latih3": "20", "latih4": "200", "latih5": "-5", 
        "latih6": "100", "latih7": "20", "latih8": "200", "latih9": "-5", "latih10": "80", 
        "latih11": "200", "latih12": "-5", "latih13": "80", "latih14": "200", "latih15": "80", 
        "latih16": "(-5)", "latih17": "80", "latih18": "10", "latih19": "8", "latih20": "8", 
        "latih21": "-5", "latih22": "8", "latih23": "80", "latih24": "8", "latih25": "200", 
        "latih26": "-320", "latih27": "640", "latih28": "200", "latih29": "120", "latih30": "120", "latih31": "8",

        // --- Soal 2: Pagar Petani ---
        "latih32": "-0.5", "latih33": "60", "latih34": "60", "latih35": "(-0.5)", "latih36": "-60", 
        "latih37": "-1", "latih38": "60", "latih39": "60", "latih40": "2", "latih41": "30", 
        "latih42": "60", "latih43": "30"
      };

      // LOGIKA WARNA BORDER LIVE & PENYIMPANAN LOCALSTORAGE
      function initInputLogic(answersObj) {
        Object.keys(answersObj).forEach(name => {
          const input = document.querySelector(`[name="${name}"]`);
          if (input) {
            // 1. Ambil data lama saat halaman direload
            const savedValue = localStorage.getItem('masalah_' + name);
            if (savedValue !== null) {
              input.value = savedValue;
              let uAns = savedValue.trim().replace(',', '.').toLowerCase();
              if (uAns === answersObj[name].toLowerCase()) {
                input.style.borderColor = "green";
                input.style.backgroundColor = "#e8ffe8";
              } else if (uAns.length > 0) {
                input.style.borderColor = "red";
                input.style.backgroundColor = "#ffe8e8";
              }
            }

            // 2. Berikan respon perubahan warna border live saat mengetik
            input.addEventListener("input", function() {
              localStorage.setItem('masalah_' + name, this.value);
              let currentVal = this.value.trim().replace(',', '.').toLowerCase();
              if (currentVal === answersObj[name].toLowerCase()) {
                this.style.borderColor = "green";
                this.style.backgroundColor = "#e8ffe8";
              } else if (currentVal.length > 0) {
                this.style.borderColor = "red";
                this.style.backgroundColor = "#ffe8e8";
              } else {
                this.style.borderColor = "";
                this.style.backgroundColor = "";
              }
            });
          }
        });
      }

      // Aktifkan logika untuk kedua bagian include
      initInputLogic(jawabanContoh);
      initInputLogic(jawabanLatihan);


      // --- LOGIKA TOMBOL CEK CONTOH ---
      const btnContoh = document.getElementById('btnCekContoh');
      if (btnContoh) {
        btnContoh.addEventListener("click", function() {
          let allCorrect = true;
          let firstError = null;

          Object.keys(jawabanContoh).forEach(name => {
            const input = document.querySelector(`[name="${name}"]`);
            if (input) {
              let val = input.value.trim().replace(',', '.').toLowerCase();
              if (val !== jawabanContoh[name].toLowerCase()) {
                allCorrect = false;
                input.style.borderColor = "red";
                input.style.backgroundColor = "#ffe8e8";
                if (!firstError) firstError = input;
              } else {
                input.style.borderColor = "green";
                input.style.backgroundColor = "#e8ffe8";
              }
            }
          });

          if (allCorrect) {
            Swal.fire({
              title: 'Hebat! 🎉',
              text: 'Semua jawaban contoh kamu benar.',
              icon: 'success',
              iconColor: '#71dd37',
              confirmButtonText: 'Lanjut',
              confirmButtonColor: '#696cff',
              customClass: { popup: 'rounded-4 shadow', confirmButton: 'px-5' }
            });
          } else {
            Swal.fire({
              icon: 'info',
              title: 'Masih ada yang salah 😅',
              text: 'Periksa lagi kolom yang berwarna merah...',
              confirmButtonText: 'Siap!',
              confirmButtonColor: '#8592a3',
              customClass: { popup: 'rounded-4' }
            });
            if (firstError) {
              firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
              firstError.focus();
            }
          }
        });
      }


      // --- LOGIKA TOMBOL CEK LATIHAN ---
      const btnLatihan = document.getElementById('btnCekLatihan');
      if (btnLatihan) {
        btnLatihan.addEventListener("click", function() {
          let allCorrect = true;
          let firstError = null;

          Object.keys(jawabanLatihan).forEach(name => {
            const input = document.querySelector(`[name="${name}"]`);
            if (input) {
              let val = input.value.trim().replace(',', '.').toLowerCase();
              if (val !== jawabanLatihan[name].toLowerCase()) {
                allCorrect = false;
                input.style.borderColor = "red";
                input.style.backgroundColor = "#ffe8e8";
                if (!firstError) firstError = input;
              } else {
                input.style.borderColor = "green";
                input.style.backgroundColor = "#e8ffe8";
              }
            }
          });

          if (allCorrect) {
            Swal.fire({
              title: 'Luar Biasa! 🎉',
              text: 'Semua jawaban benar. Materi Sub-bab 3 Selesai!',
              icon: 'success',
              iconColor: '#71dd37',
              confirmButtonText: 'Buka Kuis',
              confirmButtonColor: '#696cff',
              customClass: { popup: 'rounded-4 shadow', confirmButton: 'px-5' }
            }).then((result) => {
              if (result.isConfirmed) {

                  fetch("{{ route('student.activity.store') }}", {
                      method: "POST",
                      headers: {
                          "Content-Type": "application/json",
                          "X-CSRF-TOKEN": "{{ csrf_token() }}"
                      },
                      body: JSON.stringify({
                          menu_key: "masalah"
                      })
                  })
                  .then(response => response.json())
                  .then(() => {
                      window.location.href = "{{ route('quiz.show', ['quizKey' => 'masalah']) }}";
                  });

              }
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Belum Selesai...',
              text: 'Masih ada jawaban yang kosong atau salah. Periksa kotak merah ya!',
              confirmButtonText: 'Siap!',
              confirmButtonColor: '#8592a3',
              customClass: { popup: 'rounded-4' }
            });
            if (firstError) {
              firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
              firstError.focus();
            }
          }
        });
      }
    });
  </script>
@endpush