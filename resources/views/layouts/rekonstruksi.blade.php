@extends('layouts.dashboard')

@section('content')
<div class="rounded-3 ">
  <div class="w-100">
  
      <main role="main" class="">
       
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
                    Diketahui tiga buah titik sembarang dan berlainan, yaitu titik \( (x_{1},y_{1}), (x_{2},y_{2}) \)
                    dan \( (x_{3},y_{3}) \), dengan ketiga titik tersebut dapat menemukan persamaan
                    kuadrat <mark>\( y = ax_{2} + bx + c \)</mark> dengan menyusun sistem pesamaan linear:
                    <div class="d-flex flex-row justify-content-center" style="padding: 0;">
                      <span style="font-size: 6.75rem;" class="me-1">{</span>
                      <div class="flex-col mt-2 fs-5">
                        $$ ax_{1}^2 + bx_{1} + c = y_{1} $$
                        $$ ax_{2}^2 + bx_{2} + c = y_{2} $$
                        $$ ax_{3}^2 + bx_{3} + c = y_{3} $$
                      </div>
                    </div>
                  </li>
                  <li>
                    Diketahui titik potong dengan sumbu \( x: (x_{1},0) \) dan \( (x_{2},0) \) dan satu titik
                    sembarang: \( (x_{3},y_{3}) \), dengan mengetahui dua titik potong dengan sumbu \(x\) dan
                    satu titik lain, maka kita dapat menggunakan bentuk faktor dari persamaan
                    kuadrat yaitu:

                    $$ \colorbox{#fff3b0}{$y = a(x - x_{1})(x - x_{2})$} $$

                    Kemudian, substitusi titik \( (x_{3}, y_{3}) \) untuk menemukan \(a\):

                    $$ \colorbox{#fff3b0}{$y_{3} = a(x_{3} - x_{1})(x_{3} - x_{2})$} $$

                    Dengan persamaan ini kita dapat mengetahui nilai \(a\), dan dapat membentuk
                    persamaan kuadrat lengkap.
                  </li>
                  <li class="mt-3">
                    Diketahui titik puncak (titik ekstrim): \( (ℎ, 𝑘) \), dan satu titik sembarang: \( (x_{1} ,
                    y_{1}) \), dalam hal ini kita dapat menggunakan bentuk vertex dari persamaan
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
                      <p>Ikutilah langkah-langkah berikut secara berurutan</p>
                      <li>Pahamilah tiga kondisi dan rumus dasar rekonstruksi fungsi kuadrat di atas dengan teliti.</li>
                      <li>Amati langkah-langkah pengerjaan pada bagian contoh soal rekonstruksi yang disediakan.</li>
                      <li>Lengkapi bagian yang rumpang (kolom kosong) pada contoh soal untuk memahami alur perhitungannya.</li>
                      <li>Terapkan konsep tersebut untuk menyelesaikan latihan soal rekonstruksi yang diberikan.</li>
                      <li>Pastikan semua jawaban rumpang telah terisi dengan benar.</li>
                      <li>Klik tombol kirim jawaban untuk menyelesaikan kegiatan.</li>
                    </ol>
                  </div>
                </div>
                
                <div id="wrapper-contoh" class="mb-4">
                  @include('pages.materi.rekonstruksi.contoh')
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
                  @include('pages.materi.rekonstruksi.latihan')
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

    document.addEventListener("DOMContentLoaded", function() {
      // DAFTAR KUNCI JAWABAN PERSIS DARI FILE CONTOH & LATIHAN
      const jawabanContoh = {
        "isi1": "4",
        "isi2": "2",
        "isi3": "3",
        "isi4": "9",
        "isi5": "3",
        "isi6": "5",
        "isi7": "4",
        "isi8": "2",
        "isi9": "3",
        "isi10": "3",
        "isi11": "1",
        "isi12": "9",
        "isi13": "3",
        "isi14": "4",
        "isi15": "2",
        "isi16": "5",
        "isi17": "3",
        "isi18": "5",
        "isi19": "2",
        "isi20": "3",
        "isi21": "1",
        "isi22": "5",
        "isi23": "2",
        "isi24": "5",
        "isi25": "3",
        "isi26": "2",
        "isi27": "1",
        "isi28": "2",
        "isi29": "1",
        "isi30": "1",
        "isi31": "2",
        "isi32": "3",
        "isi33": "1",
        "isi34": "2",
        "isi35": "1",
        "isi36": "3",
        "isi37": "2",
        "isi38": "1",
        "isi39": "1",
        "isi40": "3",
        "isi41": "2",
        "isi42": "1",
        "isi43": "2",
        "isi44": "1",
        "isi45": "2",
        "isi46": "1",
        "isi47": "2",
        "isi48": "2",
        "isi49": "1",
        "isi50": "2",
        "isi51": "1",
        "isi52": "2",
        "isi53": "2",
      };

      const jawabanLatihan = {
        "isi1": "4", "isi2": "2", "isi3": "3", "isi4": "9", "isi5": "3", "isi6": "5", "isi7": "4", "isi8": "2", "isi9": "3", "isi10": "3", "isi11": "1", "isi12": "9", "isi13": "3", "isi14": "4", "isi15": "2", "isi16": "5", "isi17": "3", "isi18": "5", "isi19": "2", "isi20": "3", "isi21": "1", "isi22": "5", "isi23": "2", "isi24": "5", "isi25": "3", "isi26": "2", "isi27": "1", "isi28": "2", "isi29": "1", "isi30": "1", "isi31": "2", "isi32": "3", "isi33": "1", "isi34": "2", "isi35": "1", "isi36": "3", "isi37": "2", "isi38": "1", "isi39": "1", "isi40": "3", "isi41": "2", "isi42": "1", "isi43": "2", "isi44": "1", "isi45": "2", "isi46": "1", "isi47": "2", "isi48": "2", "isi49": "1", "isi50": "2", "isi51": "1", "isi52": "2", "isi53": "2",
        
        // Kunci Latihan (lat)
        "lat1": "1", "lat2": "1", "lat3": "2", "lat4": "2", "lat5": "4", "lat6": "4", "lat7": "4", "lat8": "2", "lat9": "4", "lat10": "16", "lat11": "4", "lat12": "7", "lat13": "4", "lat14": "2", "lat15": "4", "lat16": "3", "lat17": "2", "lat18": "16", "lat19": "4", "lat20": "4", "lat21": "2", "lat22": "7", "lat23": "4", "lat24": "12", "lat25": "2", "lat26": "3", "lat27": "3", "lat28": "2", "lat29": "12", "lat30": "2", "lat31": "3", "lat32": "12", "lat33": "2", "lat34": "2", "lat35": "3", "lat36": "3", "lat37": "2", "lat38": "2", "lat39": "12", "lat40": "2", "lat41": "6", "lat42": "2", "lat43": "3", "lat44": "4", "lat45": "6", "lat46": "-1", "lat47": "-1", "lat48": "6", "lat49": "3", "lat50": "2", "lat51": "-1", "lat52": "6", "lat53": "2", "lat54": "5", "lat55": "2", "lat56": "1", "lat57": "6", "lat58": "5", "lat59": "2", "lat60": "1", "lat61": "6", "lat62": "5", "lat63": "2", "lat64": "2", "lat65": "1", "lat66": "1", "lat67": "6", "lat68": "5", "lat69": "2", "lat70": "56", "lat71": "12", "lat72": "1", "lat73": "6", "lat74": "5", "lat75": "2", "lat76": "56", "lat77": "12", "lat78": "-2", "lat79": "0", "lat80": "3", "lat81": "0", "lat82": "0", "lat83": "-6", 
        "lat86": "y", "lat87": "(-2)", "lat88": "3", "lat89": "-6", "lat90": "2", "lat91": "-3", "lat92": "-6", "lat93": "-6", "lat94": "-6", "lat95": "-6", "lat96": "1", "lat97": "a", "lat98": "x1", "lat99": "x2", "lat100": "2", "lat101": "3", "lat102": "x", "lat103": "3", "lat104": "2", "lat105": "6", "lat106": "x", "lat107": "x", "lat108": "6", "lat109": "-1", "lat110": "5", "lat111": "1", "lat112": "1", "lat113": "(-1)", "lat114": "5", "lat115": "1", "lat116": "5", "lat117": "1", "lat118": "1", "lat119": "1", "lat120": "5", "lat121": "1", "lat122": "2", "lat123": "5", "lat124": "1", "lat125": "4", "lat126": "5", "lat127": "1", "lat128": "5", "lat129": "4", "lat130": "-4", "lat131": "4", "lat132": "-4", "lat133": "4", "lat134": "-1", "lat135": "-1", "lat136": "-1", "lat137": "1", "lat138": "5", "lat139": "1", "lat140": "x", "lat141": "2x", "lat142": "1", "lat143": "-1", "lat144": "x", "lat145": "2x", "lat146": "1", "lat147": "5", "lat148": "-x", "lat149": "2", "lat150": "1", "lat151": "5", "lat152": "-x", "lat153": "2", "lat154": "4", "lat155": "1"
      };

      // FUNGSI UTAMA UNTUK MENANGANI WARNA LIVE & RESTORE LOCALSTORAGE
      function initInputLogic(answersObj) {
        Object.keys(answersObj).forEach(name => {
          const input = document.querySelector(`[name="${name}"]`);
          if (input) {
            // 1. Ambil data lama saat halaman direload
            const savedValue = localStorage.getItem('rekonstruksi_' + name);
            if (savedValue !== null) {
              input.value = savedValue;
              let uAns = savedValue.trim().toLowerCase();
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
              localStorage.setItem('rekonstruksi_' + name, this.value);
              let currentVal = this.value.trim().toLowerCase();
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

      // Aktifkan logika untuk kedua bagian
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
              let val = input.value.trim().toLowerCase();
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
              text: 'Semua jawaban kamu benar.',
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
      // --- LOGIKA TOMBOL CEK LATIHAN ---
      const btnLatihan = document.getElementById('btnCekLatihan');
      if (btnLatihan) {
        btnLatihan.addEventListener("click", function() {
          let allCorrect = true;
          let firstError = null;

          Object.keys(jawabanLatihan).forEach(name => {
            const input = document.querySelector(`[name="${name}"]`);
            if (input) {
              let val = input.value.trim().toLowerCase();
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
              text: 'Semua jawaban benar. Mari lanjut ke kuis!',
              icon: 'success',
              iconColor: '#71dd37',
              confirmButtonText: 'Buka Kuis',
              confirmButtonColor: '#696cff',
              customClass: { popup: 'rounded-4 shadow', confirmButton: 'px-5' }
            }).then((result) => {
              if (result.isConfirmed) {
                // Menggunakan URL lurus agar tidak bentrok dengan syntax tanda petik JavaScript
                window.location.href = "{{ route('quiz.show', ['quizKey' => 'rekonstruksi']) }}"; 
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