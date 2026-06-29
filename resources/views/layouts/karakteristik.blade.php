<!DOCTYPE html>
<html lang="id">
<head>
    <link href="{{ asset('css/utama.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>
      MathJax = {
        tex: { inlineMath: [['\\(', '\\)']] },
        svg: { fontCache: 'global' }
      };
    </script>
    <script id="MathJax-script" async 
      src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>

    <style>
        .container-flex {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: center;
        }
        .flex-item {
            flex: 1;
            min-width: 300px;
        }
        /* ===== SWITCHER STYLE ===== */
        .step-page {
            display: none;
            transition: all 0.4s ease;
        }
        .step-page.active {
            display: block;
        }
        .switcher-nav {
            text-align: center;
            margin-top: 20px;
        }
        .switcher-nav button {
            margin: 5px;
        }
    </style>
</head>

<body>
@extends('layouts.dashboard')
@extends('layouts.app')

@section('content')
<div class="rounded-3">
  <div class="w-100">
    <main role="main">
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Karakteristik Fungsi Kuadrat</h5>

          <div class="konten-justify">
            <div id="content" class="accordion">
              <div class="accordion-item">
                <h2 class="mb-0 accordion-header" id="headingSatu">
                  <button class="accordion-button bg-slate" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseSatu"
                    aria-expanded="true"
                    aria-controls="collapseSatu">
                    <img src="{{ asset('assets/img/app/tujuan-pembelajaran.png')}}" 
                      alt="icon" width="200" class="icon" style="margin-right: 10px;">
                  </button>
                </h2>
                <div id="collapseSatu" class="accordion-collapse collapse"
                     aria-labelledby="headingSatu" data-bs-parent="#content">
                  <div class="accordion-body">
                    @include('pages.materi.karakteristik.tujuan')
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /card -->

      <!-- =============== KONTEN UTAMA =============== -->
      <div class="accordion" id="accordionAktivitas">
        <div class="card">
          <div class="px-3 mt-3">
            <div class="mengingat" id="mengingat">
              <p class="mt-3" style="padding: 0 30px; text-align: justify; text-indent: 30px;">
              &nbsp;&nbsp;&nbsp;&nbsp; Fungsi kuadrat adalah fungsi polinom (suku banyak) dengan pangkat 
                tertinggi variabelnya adalah 2. Grafik fungsi kuadrat berbentuk parabola 
                seperti pada contoh berikut ini.
              </p>
              <div class="text-center">
                <img src="{{ asset('assets/img/app/karakteristik1.png') }}" 
                alt="Contoh grafik fungsi kuadrat" class="img-fluid">
                <p style="text-align: center">Gambar 4. Grafik Fungsi Kuadrat Terbuka Ke Atas Dan Ke Bawah (Sumber: Canva.com)</p>
              </div>

              <p class="mt-3" style="padding: 0 30px; text-align: justify; text-indent: 30px;">
              &nbsp;&nbsp;&nbsp;&nbsp; Berdasarkan gambar di atas, gambar a menunjukkan bentuk parabola fungsi
              kuadrat terbuka ke atas dan gambar b menunjukkan bentuk parabola fungsi
              kuadrat terbuka ke bawah. Bentuk umum dari persamaan fungsi kuadrat sebagai berikut:
              <mark> \( 𝑓(𝑥) = 𝑎𝑥^2 + 𝑏𝑥 + 𝑐 \) dengan 𝑎 ≠ 0 </mark>. Kemudian bagaimana peran nilai 𝑎, 
              𝑐, dan 𝑏. Ayoo, lihat pembahasan berikut ini.
              </p>

              <!-- ================= SWITCHER MULAI ================= -->
              <div id="materiSwitcher">

                <div class="step-page">
                  <h5><strong>A. </strong>Peran nilai 𝑎 dalam fungsi kuadrat</h5>
                  <div class="card border-0 shadow-sm mb-4" style="background: #f8f9ff;">
                    <div class="card-body">
                        <p class="mb-2 fw-semibold">📌 Petunjuk Kegiatan:</p>
                        <ol class="mb-0">
                          <p>Ikutilah langkah-langkah berikut secara berurutan</p>
                          <li>Amatilah tampilan Geogebra yang disediakan.</li>
                          <li>Geser slider nilai 𝑎 untuk melihat perubahan bentuk grafik fungsi kuadrat.</li>
                          <li>Perhatikan arah terbukanya parabola berdasarkan nilai 𝑎.</li>
                          <li>Isilah tabel berdasarkan hasil pengamatan pada setiap perubahan nilai 𝑎.</li>
                          <li>Lengkapilah bagian kesimpulan berdasarkan hasil eksplorasi yang telah dilakukan.</li>
                          <li>Kerjakan soal latihan yang tersedia dengan teliti.</li>
                          <li>Pastikan semua jawaban telah diisi dengan benar.</li>
                          <li>Klik tombol kirim jawaban untuk menyelesaikan kegiatan.</li>
                        </ol>
                    </div>
                  </div>

                  <div class="bagian-materi mb-5">
                    <div class="container-flex">
                      <div class="flex-item">
                        <iframe src="https://www.geogebra.org/calculator/yugqknmz" 
                          style="width:100%; height:500px; border:0;" allowfullscreen allow="geogebra"></iframe>
                          <p style="text-align: center">(Sumber: Dibuat Mandiri Via Geogebra)</p>
                      </div>

                      <div class="flex-item">
                        <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead class="bg-primary ">
                              <p style="text-align: center">Tabel 2. Peran Nilai \(a\)</p>
                              <tr>
                                <td class="text-center" style="color: white">Peran nilai \(a\)</td>
                                <td class="text-center" style="color: white">Parabola terbuka ke atas / bawah</td>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                              $values = [-2, 3, -5, 2, -1];
                                foreach ($values as $value) {
                                    echo "<tr>
                                            <td class='text-center'>\\( a = $value \\)</td>
                                            <td>
                                                <select name='nilai[$value]' class='form-control text-center mx-auto'>
                                                    <option value=''></option>
                                                    <option value='atas'>Atas</option>
                                                    <option value='bawah'>Bawah</option>
                                                </select>
                                            </td>
                                          </tr>";
                                }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="text-center mt-2">
                      <button type="button" class="btn btn-info px-4 shadow-sm" onclick="periksaJawabanBagian(this)">Cek Jawaban Tabel</button>
                    </div>
                  </div>

                  <div class="bagian-materi mb-5">
                    <p>Berdasarkan hasil eksplorasi, nilai <b>a</b> menentukan
                      <input type="text" name="arah1" style="width: 50px;"> dan 
                      <input type="text" name="arah2" style="width: 120px;">.
                      Jika <b>a > 0</b>, parabola terbuka ke 
                      <input type="text" name="arah3" style="width: 50px;">
                      Jika <b>a < 0</b>, parabola terbuka ke 
                      <input type="text" name="arah4" style="width: 70px;">.
                    </p>
                    <p>Semakin besar |a| maka grafik semakin 
                      <input type="text" name="lebar1" style="width: 70px;">
                      , semakin kecil |a| maka grafik semakin 
                      <input type="text" name="lebar2" style="width:50px;">.
                    </p>
                    <div class="text-center mt-2">
                      <button type="button" class="btn btn-info px-4 shadow-sm" onclick="periksaJawabanBagian(this)">Cek Jawaban Kesimpulan</button>
                    </div>
                  </div>

                  <div class="my-4">
                    <?php
                    if (!empty($input_values)) {
                      echo "<h4>Hasil Inputan:</h4><pre>";
                        print_r($input_values);
                        echo "</pre>";
                      }
                    ?>
                  </div>

                  <div class="bagian-materi mb-4">
                    @include('pages.materi.karakteristik.contoh')
                    @include('pages.materi.karakteristik.latihan')
                    <div class="text-center mt-3">
                      <button type="button" class="btn btn-info px-4 shadow-sm" onclick="periksaJawabanBagian(this)">Cek Jawaban Latihan A</button>
                    </div>
                  </div>
                </div>


                <div class="step-page">
                  <h5><strong>B. </strong>Peran nilai \( b \) dalam fungsi kuadrat </h5>
                  <p class="mt-3" style="text-align: justify;">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    Nilai \( b \) disebut koefisien linier. Nilai \( b \) mempengaruhi letak sumbu simetri dan posisi puncak parabola.
                    Nilai \( b \) juga menggeser puncak parabola ke kiri dan ke kanan.
                    Sumbu simetri dari parabola adalah garis vertikal yang melewati titik puncak, sehingga membagi parabola menjadi dua bagian yang simetris.
                    Persamaan dari sumbu simetri adalah <mark> \( x=-\frac{b}{2a} \) </mark>. Sumbu simetri \(x = -\frac{b}{2a}\) melalui titik puncak.
                    Titik puncak (vertex) dari sebuah parabola yang berbentuk <mark> \( y=ax^2+bx+c \) </mark> terletak di koordinat (𝑥, 𝑦) dimana:
                  </p>
                  <p>- Titik puncak fungsi kuadrat yaitu \(x_p , y_p \) dengan \( x_p=-\frac{b}{2a} \) dan \( y_p=-\frac{D}{4a} \) </p>
                  <p>- Koordinat 𝑦 dari titik puncak dapat ditemukan dengan memasukkan nilai 𝑥 tersebut ke dalam persamaan kuadrat.</p>

                  <div class="card border-0 shadow-sm mb-4" style="background: #f8f9ff;">
                    <div class="card-body">
                      <p class="mb-2 fw-semibold">📌 Petunjuk Kegiatan:</p>
                      <ol class="mb-0">
                        <p>Ikutilah langkah-langkah berikut secara berurutan</p>
                        <li>Bacalah contoh soal yang disediakan dengan teliti.</li>
                        <li>Perhatikan langkah-langkah penyelesaian pada contoh soal.</li>
                        <li>Pahamilah pengaruh nilai \(b\) terhadap grafik fungsi kuadrat.</li>
                        <li>Kerjakan contoh soal yang diberikan.</li>
                        <li>Kerjakan soal latihan yang tersedia dengan teliti.</li>
                        <li>Pastikan semua jawaban telah diisi dengan benar.</li>
                        <li>Klik tombol kirim jawaban untuk menyelesaikan kegiatan.</li>
                      </ol>
                    </div>
                  </div>

                  <div class="bagian-materi mb-5">
                    <span class="border border-primary p-2 my-2 rounded">Contoh Soal: </span>
                    <p class="mt-3">1. Diketahui fungsi kuadrat \( f(x)=2x^2-8x+2 \). Tentukan titik puncak, sumbu simetri serta apakah titik puncak adalah titik maksimum atau titik minimum? </p>
                    <span class="border border-primary p-2 my-2 rounded">Jawab: </span>
                    <ol type="a" class="mt-3">
                      <li>
                        Menentukan titik puncak:
                        <p>- Nilai 𝑎 = 2, 𝑏 = −4, dan 𝑐 = 1</p>
                        <p>- Koordinat 𝑥 dari titik puncak: \( 𝑥 = -\frac{b}{2a} = -\frac{(-8)}{2(2)} = \frac{8}{4} = 2 \)</p>
                        <p>- Koordinat 𝑦 dari titik puncak: \( y = 2(2)^2-4(2)+1 = 8 − 16 + 2 = -6 \)</p>
                        <p>- Jadi, titik puncak adalah (\(2, -6 \)).</p>
                      </li>
                      <li>Menentukan sumbu simetri:<p>- Sumbu simetri adalah garis vertikal 𝑥 = 2</p></li>
                      <li>
                        Menentukan apakah titik puncak adalah titik maksimum atau titik minimum:
                        <p>- Karena 𝑎 = 2 (positif), parabola terbuka ke atas, sehingga titik puncak (\(2, -6)\) adalah titik minimum.</p>
                      </li>
                    </ol>
                    <p class="mt-3">2. Diketahui fungsi kuadrat \( f(x)=2x^2-4x+1 \). Tentukan titik puncak, sumbu simetri serta apakah titik puncak adalah titik maksimum atau titik minimum? </p>
                    <span class="border border-primary p-2 my-2 rounded">Jawab: </span>
                    <ol type="a" class="mt-3">
                      <li>
                        Menentukan titik puncak:
                        <p>- Nilai 𝑎 = 2, 𝑏 = −4, dan 𝑐 = 1</p>
                        <p>- Koordinat 𝑥 dari titik puncak: \( 𝑥 = -\frac{b}{2a} = -\frac{(-4)}{2(2)} = \frac{4}{4} = \) <input type="text" name="b1" style="width: 50px;"></p>
                        <p>- Koordinat 𝑦 dari titik puncak: \( y = 2(1)^2-4(1)+1 \) = <input type="text" name="b2" style="width: 50px;"> − <input type="text" name="b3" style="width: 50px;"> + <input type="text" name="b4" style="width: 50px;"> = <input type="text" name="b5" style="width: 50px;"></p>
                        <p>- Jadi, titik puncak adalah (<input type="text" name="b6" style="width: 50px;">, <input type="text" name="b7" style="width: 50px;">).</p>
                      </li>
                      <li>Menentukan sumbu simetri:<p>- Sumbu simetri adalah garis vertikal 𝑥 = 1</p></li>
                      <li>
                        Menentukan apakah titik puncak adalah titik maksimum atau titik minimum:
                        <p>- Karena 𝑎 = 2 (positif), parabola terbuka ke <input type="text" name="b8" style="width: 50px;">, sehingga titik puncak (<input type="text" name="b9" style="width: 50px;">, <input type="text" name="b10" style="width: 50px;">) adalah titik minimum.</p>
                      </li>
                    </ol>
                    <div class="text-center">
                      <button type="button" class="btn btn-info px-4 shadow-sm" onclick="periksaJawabanBagian(this)">Cek Jawaban Contoh B</button>
                    </div>
                  </div>

                  <div class="bagian-materi mb-4">
                    <span class="border border-primary p-2 my-2 rounded">Latihan Soal: </span>
                    <ol class="mt-3">
                      <li>
                        <div> 
                          <div class="mt-3">Diketahui fungsi kuadrat \( y=2x^2+4x+4 \). Tentukan titik puncak, sumbu simetri serta apakah titik puncak adalah titik maksimum atau titik minimum?</div>
                          <span class="border border-primary p-2 my-2 rounded">Jawab: </span>
                            <ol type="a" class="mt-3">
                              <li>
                                Menentukan titik puncak:
                                <p>- Nilai 𝑎 = <input type="text" name="b_lat_1" style="width: 50px;">, 𝑏= <input type="text" name="b_lat_2" style="width: 50px;"> dan 𝑐 = <input type="text" name="b_lat_3" style="width: 50px;"></p>
                                <p>- Koordinat \( x \) dari titik puncak: \( x= \frac{-b}{2a} \)</p>
                                <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;" class="mb-3">
                                  <span>\( x = \)</span>
                                  <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                                    <input type="text" name="b_lat_4" style="width: 40px;">
                                    <hr style="margin: 0.1rem 0; border: 1px solid black;">
                                    <input type="text" name="b_lat_5" style="width: 40px;">
                                  </div>
                                  <span>=</span>
                                  <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                                    <input type="text" name="b_lat_6" style="width: 40px;">
                                    <hr style="margin: 0.1rem 0; border: 1px solid black;">
                                    <input type="text" name="b_lat_7" style="width: 40px;">
                                  </div>
                                  <span>=</span>
                                  <input type="text" name="b_lat_8" style="width: 50px;">
                                </div>
                                <p>
                                  - Koordinat \( y \) dari titik puncak: \( y = 2x^2 + 4x + 4 = \)
                                  <input type="text" name="b_lat_9" style="width: 50px;"><sup>2</sup> +
                                  <input type="text" name="b_lat_10" style="width: 50px;"> +
                                  <input type="text" name="b_lat_11" style="width: 50px;"> =
                                  <input type="text" name="b_lat_12" style="width: 50px;"> +
                                  <input type="text" name="b_lat_13" style="width: 50px;"> +
                                  <input type="text" name="b_lat_14" style="width: 50px;"> =
                                  <input type="text" name="b_lat_15" style="width: 50px;">
                                </p>
                                <p>- Jadi, titik puncaknya adalah = (<input type="text" name="b_lat_17" style="width: 50px;">,<input type="text" name="b_lat_18" style="width: 50px;">)</p>
                              </li>
                              <li>Menentukan sumbu simetri:<p>- Sumbu simetri adalah garis vertikal 𝑥 = <input type="text" name="b_lat_19" style="width: 50px;"></p></li>
                              <li>
                                Menentukan apakah titik puncak adalah titik maksimum atau titik minimum:
                                <p>- Karena 𝑎 = <input type="text" name="b_lat_20" style="width: 50px;">, parabola terbuka ke <input type="text" name="b_lat_21" style="width: 50px;">, sehingga titik puncak (<input type="text" name="b_lat_22" style="width: 50px;">, <input type="text" name="b_lat_23" style="width: 50px;">) adalah titik <input type="text" name="b_lat_24" style="width: 70px;"></p>
                              </li>
                            </ol>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="mt-3">Diketahui fungsi kuadrat \( y=-x^2+4x-4 \). Tentukan titik puncak, sumbu simetri serta apakah titik puncak adalah titik maksimum atau titik minimum?</div>
                          <span class="border border-primary p-2 my-2 rounded">Penyelesaian: </span>
                          <ol type="a" class="mt-3">
                            <li>
                              Menentukan titik puncak:
                              <p>- Nilai 𝑎 = <input type="text" name="b_lat_25" style="width: 50px;">, 𝑏= <input type="text" name="b_lat_26" style="width: 50px;"> dan 


                              𝑐 =<input type="text" name="b_lat_27" style="width: 50px;"></p>
                              <p>- Koordinat \( x \) dari titik puncak: \( x= \frac{-b}{2a} \)</p>
                              <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;" class="mb-3">
                                <span>\( x = \)</span>
                                <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                                  <input type="text" name="b_lat_28" style="width: 40px;">
                                  <hr style="margin: 0.1rem 0; border: 1px solid black;">
                                  <input type="text" name="b_lat_29" style="width: 40px;">
                                </div>
                                <span>=</span>
                                <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                                  <input type="text" name="b_lat_30" style="width: 40px;">
                                  <hr style="margin: 0.1rem 0; border: 1px solid black;">
                                  <input type="text" name="b_lat_31" style="width: 40px;">
                                </div>
                                <span>=</span>
                                <input type="text" name="b_lat_32" style="width: 50px;">
                              </div>
                              <p>- Koordinat 𝑦 dari titik puncak: \( y = -x^2+4x-4 \) = <input type="text" name="b_lat_33" style="width: 50px;"><sup>2</sup> + <input type="text" name="b_lat_34" style="width: 50px;"> - <input type="text" name="b_lat_35" style="width: 50px;">
                              = <input type="text" name="b_lat_36" style="width: 50px;"> + <input type="text" name="b_lat_37" style="width: 50px;"> - <input type="text" name="b_lat_38" style="width: 50px;">
                              = <input type="text" name="b_lat_39" style="width: 50px;"></p>
                              <p>- Jadi, titik puncaknya adalah (<input type="text" name="b_lat_41" style="width: 50px;">,<input type="text" name="b_lat_42" style="width: 50px;">)</p>
                            </li>
                            <li>Menentukan sumbu simetri:<p>- Sumbu simetri adalah garis vertikal 𝑥 = <input type="text" name="b_lat_40" style="width: 50px;"></p></li>
                            <li>
                              Menentukan apakah titik puncak adalah titik maksimum atau titik minimum:
                              <p>- Karena 𝑎 = <input type="text" name="b_lat_43" style="width: 50px;">, parabola terbuka ke <input type="text" name="b_lat_44" style="width: 60px;">, sehingga titik puncak (<input type="text" name="b_lat_45" style="width: 50px;">, <input type="text" name="b_lat_46" style="width: 50px;">) adalah titik <input type="text" name="b_lat_47" style="width: 90px;"></p>
                            </li>
                          </ol>
                        </div>
                      </li>
                    </ol>
                    <div class="text-center mt-3">
                      <button type="button" class="btn btn-info px-4 shadow-sm" onclick="periksaJawabanBagian(this)">Cek Jawaban Latihan B</button>
                    </div>
                  </div>
                </div>


                <div class="step-page">
                  <h5><strong>C. </strong>Peran nilai \(c\) dalam fungsi kuadrat</h5>
                  <p>Nilai \(c\) adalah konstanta saat \(x=0\), maka \(y=c\).</p>
                  <div class="card border-0 shadow-sm mb-4" style="background: #f8f9ff;">
                    <div class="card-body">
                        <p class="mb-2 fw-semibold">📌 Petunjuk Kegiatan:</p>
                        <ol class="mb-0">
                          <p>Ikutilah langkah-langkah berikut secara berurutan</p>
                          <li>Amatilah tampilan Geogebra yang disediakan.</li>
                          <li>Geser slider nilai \(c\) untuk melihat perubahan posisi grafik fungsi kuadrat.</li>
                          <li>Perhatikan titik potong grafik dengan sumbu \(y\) untuk setiap perubahan nilai \(c\).</li>
                          <li>Isilah tabel berdasarkan hasil pengamatan yang dilakukan dengan memasukkan nilai titik potong sumbu \(y \).</li>
                          <li>Tuliskan kesimpulan pada bagian yang telah disediakan.</li>
                          <li>Kerjakan contoh soal yang diberikan.</li>
                          <li>Kerjakan soal latihan yang tersedia dengan teliti.</li>
                          <li>Pastikan semua jawaban telah diisi dengan benar.</li>
                          <li>Klik tombol kirim jawaban untuk menyelesaikan kegiatan.</li>
                        </ol>
                    </div>
                  </div>

                  <div class="bagian-materi mb-5">
                    <div class="container-flex">
                      <div class="flex-item">
                        <iframe src="https://www.geogebra.org/calculator/truxmykq" 
                          style="width:100%; height:500px; border:0;" allowfullscreen allow="geogebra"></iframe>
                          <p style="text-align: center">(Sumber: Dibuat Mandiri Via Geogebra)</p>
                      </div>
                      <div class="flex-item">
                        <table class="table table-bordered text-center">
                          <thead class="bg-info text-white">
                            <tr>
                              <p style="text-align: center">Tabel 3. Peran Nilai \( c \)</p>
                              <td>Peran nilai \( c \)</td>
                              <td>Titik potong sumbu \( y \)</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr><td>\( c = 1 \)</td><td>(0,1)</td></tr>
                            <tr><td>5</td><td><input type="text" name="c_1" class="form-control text-center mx-auto"></td></tr>
                            <tr><td>8</td><td><input type="text" name="c_2" class="form-control text-center mx-auto"></td></tr>
                            <tr><td>-3</td><td><input type="text" name="c_3" class="form-control text-center mx-auto"></td></tr>
                            <tr><td>-6</td><td><input type="text" name="c_4" class="form-control text-center mx-auto"></td></tr>
                            <tr><td>-9</td><td><input type="text" name="c_5" class="form-control text-center mx-auto"></td></tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="text-center mt-2">
                      <button type="button" class="btn btn-info px-4 shadow-sm" onclick="periksaJawabanBagian(this)">Cek Jawaban Tabel C</button>
                    </div>
                  </div>

                  <div class="bagian-materi mb-4">
                    <p>
                      Berdasarkan hasil eksplorasi kalian, maka nilai 𝑐 menentukan <input type="text" name="input_1" class="form-control d-inline w-auto" style="width: 120px;">
                      dengan sumbu <input type="text" name="sumbu" class="form-control d-inline w-auto" style="width: 50px;">. 
                      Nilai 𝑐 merupakan nilai dari fungsi ketika 𝑥 = 0. Jadi, titik potong grafik dengan sumbu 
                      <input type="text" name="sumbu_kedua" class="form-control d-inline w-auto" style="width: 50px;"> adalah di titik 
                      (<input type="text" name="x" class="form-control d-inline w-auto" style="width: 50px;">, 
                      <input type="text" name="y" class="form-control d-inline w-auto" style="width: 50px;">). Nilai 𝑐 juga menggeser grafik 
                      fungsi kuadrat secara vertikal. Jika 𝑐 meningkat, grafik akan bergeser ke 
                      <input type="text" name="up_direction" class="form-control d-inline w-auto" style="width: 60px;">. Sebaliknya, jika 𝑐 menurun, 
                      grafik akan bergeser ke <input type="text" name="down_direction" class="form-control d-inline w-auto" style="width: 60px;">.
                    </p>
                    
                    <span class="border border-primary p-2 my-2 rounded d-inline-block">Contoh Soal: </span>
                    <div class="py-2 mt-2">
                      <p>1. \( f(x)=x^2-2x-2 \). Tentukan titik potong dengan sumbu 𝑦 dan nilai 𝑐.</p>
                      <p>Titik potong dengan sumbu \( y \) adalah \( (0, -2)\) dan nilai \( c \) adalah \( -2 \)</p>
                    </div>
                    <div class="py-2 mt-2">
                      <p>2. \( f(x)=2x^2-2x+3 \). Tentukan titik potong dengan sumbu 𝑦 dan nilai 𝑐.</p>
                      <p>Titik potong dengan sumbu \( y \) adalah \( (0, 3)\) dan nilai \( c \) adalah <input type="text" name="contoh" style="width: 50px;"></p>
                    </div>

                    <span class="border border-primary p-2 my-2 rounded d-inline-block">Latihan Soal: </span>
                    <div class="py-2 mt-2">
                      <p>1. Diketahui persamaan \( f(x)=x^2+2x \). Nilai 𝑐 yang memenuhi adalah <input type="text" name="latihan_1_c" style="width: 50px;"> serta titik potong dengan sumbu 𝑦 yaitu <input type="text" name="latihan_1_y" style="width: 70px;"></p>
                      <p>2. Diketahui Persamaan \( f(x)=-x^2-x+3 \). Nilai 𝑐 yang memenuhi adalah <input type="text" name="latihan_2_c" style="width: 50px;"> serta titik potong dengan sumbu 𝑦 yaitu <input type="text" name="latihan_2_y" style="width: 70px;"></p>
                      <p>3. Diketahui Persamaan \( f(x)=-x^2-3x+3 \). Nilai 𝑐 yang memenuhi adalah <input type="text" name="latihan_3_c" style="width: 50px;"> serta titik potong dengan sumbu 𝑦 yaitu <input type="text" name="latihan_3_y" style="width: 70px;"></p>
                      <p>4. Isilah tabel berikut ini:</p>
                      
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                          <thead class="bg-info text-white">
                            <p style="text-align: center">Tabel 4. Latihan Peran Nilai \( a, b \) dan \( c \)</p>
                            <tr>
                              <td>Persamaan Fungsi</td>
                              <td>Nilai \( a \)</td>
                              <td>Nilai \( b \)</td>
                              <td>Nilai \( c \)</td>
                              <td>Grafik terbuka ke</td>
                              <td>Titik potong sumbu \( y \)</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>\( f(x)=2x^2-x+3 \)</td>
                              <td><input type="text" name="fungsi_1_1" class="form-control mx-auto" style="width: 50px;"></td>
                              <td><input type="text" name="fungsi_1_2" class="form-control mx-auto" style="width: 50px;"></td>
                              <td><input type="text" name="fungsi_1_3" class="form-control mx-auto" style="width: 50px;"></td>
                              <td><input type="text" name="fungsi_1_4" class="form-control mx-auto" style="width: 100px;"></td>
                              <td><input type="text" name="fungsi_1_5" class="form-control mx-auto" style="width: 100px;"></td>
                            </tr>
                            <tr>
                              <td>\( f(x)=-2x^2-2x+6 \)</td>
                              <td><input type="text" name="fungsi_2_1" class="form-control mx-auto" style="width: 50px;"></td>
                              <td><input type="text" name="fungsi_2_2" class="form-control mx-auto" style="width: 50px;"></td>
                              <td><input type="text" name="fungsi_2_3" class="form-control mx-auto" style="width: 50px;"></td>
                              <td><input type="text" name="fungsi_2_4" class="form-control mx-auto" style="width: 100px;"></td>
                              <td><input type="text" name="fungsi_2_5" class="form-control mx-auto" style="width: 100px;"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="text-center mt-3">
                      <button type="button" class="btn btn-info px-4 shadow-sm" onclick="periksaJawabanBagian(this)">Cek Jawaban Latihan C</button>
                    </div>
                  </div>
                </div>


                <div class="step-page">
                  <h5><strong>D.</strong> Nilai diskriminan dalam fungsi kuadrat</h5>
                  <p>
                    Diskriminan adalah nilai <mark>\( D = b^2 - 4ac \)</mark> untuk persamaan kuadrat
                    <mark>\( ax^2 + bx + c = 0 \)</mark>. Diskriminan digunakan untuk menentukan jenis dan banyaknya akar persamaan kuadrat. Contohnya seperti pada gambar di bawah ini:
                  </p>

                  <div class="text-center mb-3">
                    <img src="{{ asset('assets/img/app/karakteristik11.png') }}" alt="Contoh grafik fungsi kuadrat berbentuk parabola" class="img-fluid">
                    <p>Gambar 8. Titik Potong dengan Sumbu 𝑥 (Sumber: Susanto dkk., 2021)</p>
                  </div>

                  <p>
                    Pada fungsi kuadrat berbentuk \( y=f(x)=ax^2+bx+c \), diskriminan diberikan oleh nilai \( D = b^2-4ac \) untuk menentukan jumlah titik potong dengan sumbu x.
                    <br>𝐷 > 0 maka ada dua titik potong pada sumbu x.
                    <br>𝐷 = 0 maka ada satu titik potong pada sumbu x.
                    <br>𝐷 < 0 maka tidak ada titik potong pada sumbu x.
                  </p>

                  <div class="card border-0 shadow-sm mb-4" style="background: #f8f9ff;">
                    <div class="card-body">
                      <p class="mb-2 fw-semibold">📌 Petunjuk Kegiatan:</p>
                      <ol class="mb-0">
                        <p>Ikutilah langkah-langkah berikut secara berurutan</p>
                        <li>Bacalah penjelasan tentang nilai diskriminan dengan teliti.</li>
                        <li>Amatilah contoh grafik dan hubungan diskriminan dengan titik potong terhadap sumbu \(x\).</li>
                        <li>Kerjakan contoh soal dengan melengkapi langkah-langkah perhitungan yang tersedia.</li>
                        <li>Kerjakan soal latihan dengan menentukan nilai \(a\), \(b\), dan \(c\), kemudian hitung nilai diskriminannya.</li>
                        <li>Tentukan makna nilai diskriminan terhadap jumlah titik potong grafik dengan sumbu \(x\).</li>
                        <li>Pada bagian <b>Ayo Mencoba</b>, lengkapilah tabel nilai fungsi yang diberikan.</li>
                        <li>Gunakan GeoGebra untuk membantu memvisualisasikan grafik fungsi kuadrat.</li>
                        <li>Pastikan semua jawaban telah diisi dengan benar.</li>
                        <li>Klik tombol kirim jawaban untuk menyelesaikan kegiatan.</li>
                      </ol>
                    </div>
                  </div>

                  <div class="bagian-materi mb-5">
                    <span class="border border-primary p-2 my-2 rounded d-inline-block">Contoh Soal:</span>
                    <p class="my-2">1. Hitunglah nilai diskriminan dari fungsi \( f(x)=2x^2-x+4\) !</p>
                    <ol type="a">
                      <li>Menentukan nilai 𝑎, 𝑏, dan 𝑐: <p>- Nilai 𝑎 = 2, 𝑏 = -1, dan 𝑐 = 4</p></li>
                      <li>
                        Menghitung nilai diskriminan:
                        <p>
                          - \( D=b^2-4ac = -1^2 - 4(2)(4) = 1 - 32 = -31 \) 
                        </p>
                        <p>- Jadi, nilai diskriminan adalah \( -31 \) artinya tidak ada titik potong pada sumbu \( x \)</p>
                      </li>
                    </ol>
                    <p class="my-2">2. Hitunglah nilai diskriminan dari fungsi \( f(x)=-x^2-x+2\) !</p>
                    <ol type="a">
                      <li>Menentukan nilai 𝑎, 𝑏, dan 𝑐: <p>- Nilai 𝑎 = −1, 𝑏 = -1, dan 𝑐 = 2</p></li>
                      <li>
                        Menghitung nilai diskriminan:
                        <p>
                          - \( D=b^2-4ac \) =
                          <input type="text" name="d1" style="width: 50px;"><sup>2</sup> −
                          <input type="text" name="d2" style="width: 50px;"> (<input type="text" name="d3" style="width: 50px;">)(<input type="text" name="d4" style="width: 50px;">) 
                          = <input type="text" name="d5" style="width: 50px;"> + <input type="text" name="d6" style="width: 50px;"> = <input type="text" name="d7" style="width: 50px;">
                        </p>
                        <p>- Jadi, nilai diskriminan adalah <input type="text" name="d8" style="width: 50px;"> artinya <input type="text" name="d41" style="width: 250px;"></p>
                      </li>
                    </ol>

                    <span class="border border-primary p-2 my-2 rounded d-inline-block">Latihan Soal:</span>
                    <p class="my-2">1. Hitunglah nilai diskriminan dari fungsi \( f(x)=3x^2-9x-12 \) !</p>
                    <ol type="a">
                      <li>
                        Menentukan nilai 𝑎, 𝑏, dan 𝑐:
                        <p>- Nilai 𝑎 = <input type="text" name="d9" style="width: 50px;">, 𝑏 = <input type="text" name="d10" style="width: 50px;">, 𝑐 = <input type="text" name="d11" style="width: 50px;"></p>
                      </li>
                      <li>
                        Menghitung nilai diskriminan:
                        <p>
                          - \( D=b^2-4ac \) = <input type="text" name="d12" style="width: 50px;"><sup>2</sup> - <input type="text" name="d13" style="width: 50px;">(<input type="text" name="d14" style="width: 50px;">)(<input type="text" name="d15" style="width: 50px;">) 
                          = <input type="text" name="d16" style="width: 50px;"> + <input type="text" name="d17" style="width: 50px;"> = <input type="text" name="d18" style="width: 50px;">
                        </p>
                        <p>- Jadi, nilai diskriminan adalah <input type="text" name="d19" style="width: 50px;"> artinya <input type="text" name="d42" style="width: 250px;"></p>
                      </li>
                    </ol>

                    <p class="my-2">2. Hitunglah nilai diskriminan dari fungsi \( f(x)=2x^2-x+3 \) !</p>
                    <ol type="a">
                      <li>
                        Menentukan nilai 𝑎, 𝑏, dan 𝑐:
                        <p>- Nilai 𝑎 = <input type="text" name="d20" style="width: 50px;">, 𝑏 = <input type="text" name="d21" style="width: 50px;">, 𝑐 = <input type="text" name="d22" style="width: 50px;"></p>
                      </li>
                      <li>
                        Menghitung nilai diskriminan:
                        <p>
                          - \( D=b^2-4ac \) = <input type="text" name="d23" style="width: 50px;"><sup>2</sup> - <input type="text" name="d24" style="width: 50px;">(<input type="text" name="d25" style="width: 50px;">)(<input type="text" name="d26" style="width: 50px;">) 
                          = <input type="text" name="d27" style="width: 50px;"> - <input type="text" name="d28" style="width: 50px;"> = <input type="text" name="d29" style="width: 50px;">
                        </p>
                        <p>- Jadi, nilai diskriminan adalah <input type="text" name="d30" style="width: 50px;"> artinya <input type="text" name="d43" style="width: 280px;"></p>
                      </li>
                    </ol>
                    <div class="text-center">
                      <button type="button" class="btn btn-info px-4 shadow-sm" onclick="periksaJawabanBagian(this)">Cek Jawaban Diskriminan</button>
                    </div>
                  </div>

                  <div class="bagian-materi mb-4">
                    <hr>
                    <div class="my-4 text-center">
                      <img src="{{ asset('assets/img/app/ayomembaca.png') }}" alt="Ayo Membaca" class="img-fluid">
                    </div>

                    <ol>
                      <li>
                        Buatlah Grafik fungsi \( f(x) = x^2 + 1 \) dengan cara berikut:
                        <div style="display: flex; gap: 24px; align-items: flex-start; flex-wrap: wrap;" class="mt-2">
                          <div style="flex:1; min-width:250px;">
                            <table class="table table-bordered table-hover text-center">
                              <thead class="bg-info text-white">
                                <p style="text-align: center">Tabel 5. Grafik fungsi \( f(x) = x^2 + 1 \)</p>
                                <tr><th colspan="2">𝑓(𝑥) = 𝑥² + 1</th></tr>
                              </thead>
                              <tbody>
                                <tr><td>x</td><td>Y</td></tr>
                                <tr><td>-2</td><td>5</td></tr>
                                <tr><td>-1</td><td>2</td></tr>
                                <tr><td>0</td><td>1</td></tr>
                                <tr><td>1</td><td>2</td></tr>
                                <tr><td>2</td><td>5</td></tr>
                              </tbody>
                            </table>
                          </div>
                          <div style="flex:1; min-width:250px;">
                            <iframe src="https://www.geogebra.org/calculator/tmpyggsm" style="width: 100%; height: 320px; border:0;" allowfullscreen allow="geogebra"></iframe>
                            <p style="text-align: center">(Sumber: Dibuat Mandiri Via Geogebra)</p>
                          </div>
                        </div>
                      </li>

                      <li class="mt-4">
                        Buatlah grafik \( f(x) = -2x^2 - 2x + 6 \)
                        <div style="display: flex; gap: 24px; align-items: flex-start; flex-wrap: wrap;" class="mt-2">
                          <div style="flex:1; min-width:250px;">
                            <table class="table table-bordered table-hover text-center">
                              <thead class="bg-info text-white">
                                <p style="text-align: center">Tabel 6. Grafik fungsi \( f(x)=-2x^2-2x+6 \)</p>
                                <tr><td colspan="2">\( f(x)=-2x^2-2x+6 \)</td></tr>
                              </thead>
                              <tbody>
                                <tr><td><b>x</b></td><td><b>Y</b></td></tr>
                                <tr><td>-2</td><td><input type="text" name="d31" class="form-control text-center mx-auto" style="width:60px;"></td></tr>
                                <tr><td>-1</td><td><input type="text" name="d32" class="form-control text-center mx-auto" style="width:60px;"></td></tr>
                                <tr><td>0</td><td><input type="text" name="d33" class="form-control text-center mx-auto" style="width:60px;"></td></tr>
                                <tr><td>1</td><td><input type="text" name="d34" class="form-control text-center mx-auto" style="width:60px;"></td></tr>
                                <tr><td>2</td><td><input type="text" name="d35" class="form-control text-center mx-auto" style="width:60px;"></td></tr>
                              </tbody>
                            </table>
                          </div>
                          <div style="flex:1; min-width:250px;">
                            <iframe src="https://www.geogebra.org/calculator" style="width: 100%; height: 320px; border:0;" allowfullscreen allow="geogebra"></iframe>
                            <p style="text-align: center">(Sumber: Dibuat Mandiri Via Geogebra)</p>
                          </div>
                        </div>
                        <p class="mt-3">
                          Koordinat titik yang didapatkan dari tabel adalah:
                          <input type="text" name="d36" class="form-control d-inline-block text-center" style="width: 80px;">,
                          <input type="text" name="d37" class="form-control d-inline-block text-center" style="width: 80px;">,
                          <input type="text" name="d38" class="form-control d-inline-block text-center" style="width: 80px;">,
                          <input type="text" name="d39" class="form-control d-inline-block text-center" style="width: 80px;">,
                          <input type="text" name="d40" class="form-control d-inline-block text-center" style="width: 80px;">.
                        </p>
                      </li>
                    </ol>
                    <div class="text-center mt-3">
                      <button type="button" class="btn btn-primary px-5 shadow" onclick="periksaJawabanBagian(this)">Cek Jawaban Grafik</button>
                    </div>
                  </div>
                </div>

                <div class="switcher-nav">
                  <button id="prevBtn" class="btn btn-secondary">⬅ Sebelumnya</button>
                  <button id="nextBtn" class="btn btn-primary">Selanjutnya ➡</button>
                </div>

              </div>
              <!-- ================= SWITCHER SELESAI ================= -->

            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
<!-- Modal popup -->
<div class="modal fade" id="finishModal" tabindex="-1" aria-labelledby="finishModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center border-0 shadow-lg">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title w-100 fw-bold" id="finishModalLabel">🎉 Selamat!</h5>
      </div>
      <div class="modal-body py-4">
        <p class="fs-5 mb-1 text-dark fw-semibold">Kamu telah menyelesaikan semua materi Karakteristik!</p>
        <p class="text-muted small">Sudah siap untuk menguji pemahamanmu?</p>
      </div>
      <div class="modal-footer justify-content-center border-0 pb-4">
        <button type="button" class="btn btn-light px-4 mx-2" data-bs-dismiss="modal">Nanti Saja</button>
        
        <a href="{{ route('quiz.karakteristik') }}" class="btn btn-success px-4 mx-2 fw-bold shadow-sm">
          Mulai Kuis 🚀
        </a>
      </div>
    </div>
  </div>
</div>

@endsection

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// ==========================================
// 1. DATABASE KUNCI JAWABAN LENGKAP
// ==========================================
const correctAnswers = {
    // --- Nilai a ---
    "nilai[-2]": "bawah", "nilai[3]": "atas", "nilai[-5]": "bawah", "nilai[2]": "atas", "nilai[-1]": "bawah",
    "arah1": "arah", "arah2": "lebar parabola", "arah3": "atas", "arah4": "bawah",
    "lebar1": "sempit", "lebar2": "lebar", "fungsi_terbuka1": "atas", "fungsi_terbuka2": "bawah",
    "nilai1": "positif", "nilai2": "negatif",

    // --- Nilai c ---
    "input_1": "titik potong", "sumbu": "y", "sumbu_kedua": "y", "x": "0", "y": "c", "up_direction": "atas", "down_direction": "bawah",
    "c_1": "(0,5)", "c_2": "(0,8)", "c_3": "(0,-3)", "c_4": "(0,-6)", "c_5": "(0,-9)", "contoh": "3",
    "latihan_1_c": "0", "latihan_1_y": "(0,0)", "latihan_2_c": "3", "latihan_2_y": "(0,3)", "latihan_3_c": "3", "latihan_3_y": "(0,3)",
    "fungsi_1_1": "2", "fungsi_1_2": "-1", "fungsi_1_3": "3", "fungsi_1_4": "atas", "fungsi_1_5": "(0,3)",
    "fungsi_2_1": "-2", "fungsi_2_2": "-2", "fungsi_2_3": "6", "fungsi_2_4": "bawah", "fungsi_2_5": "(0,6)",

    // --- Nilai b ---
    "b1": "1", "b2": "2", "b3": "4", "b4": "1", "b5": "-1", "b6": "1", "b7": "-1", "b8":  "atas", "b9": "1", "b10": "-1",
    "b_lat_1": "2", "b_lat_2": "4", "b_lat_3": "4", "b_lat_4": "-4", "b_lat_5": "2(2)", "b_lat_6": "-4",
    "b_lat_7": "4", "b_lat_8": "-1", "b_lat_9": "2(-1)", "b_lat_10": "4(-1)", "b_lat_11": "4",
    "b_lat_12": "2", "b_lat_13": "-4", "b_lat_14": "4", "b_lat_15": "2", "b_lat_17": "-1",
    "b_lat_18": "2", "b_lat_19": "-1", "b_lat_20": "2", "b_lat_21": "atas", "b_lat_22": "-1",
    "b_lat_23": "2", "b_lat_24": "minimum", "b_lat_25": "-1", "b_lat_26": "4", "b_lat_27": "-4",
    "b_lat_28": "-4", "b_lat_29": "2(-1)", "b_lat_30": "-4", "b_lat_31": "-2", "b_lat_32": "2",
    "b_lat_33": "(-2)", "b_lat_34": "4(2)", "b_lat_35": "4", "b_lat_36": "4", "b_lat_37": "8",
    "b_lat_38": "4", "b_lat_39": "8", "b_lat_40": "2", "b_lat_41": "2", "b_lat_42": "8",
    "b_lat_43": "-1", "b_lat_44": "bawah", "b_lat_45": "2", "b_lat_46": "8", "b_lat_47": "maksimum",

    // --- Diskriminan ---
    "d1": "(-1)", "d2": "4", "d3": "-1", "d4": "2", "d5": "1", "d6": "8", "d7": "9", "d8": "9", "d9": "3",
    "d10": "-9", "d11": "-12", "d12": "(-9)", "d13": "4", "d14": "3", "d15": "-12", "d16": "81",
    "d17": "144", "d18": "225", "d19": "225", "d20": "2", "d21": "-1", "d22": "3", "d23": "(-1)",
    "d24": "4", "d25": "2", "d26": "3", "d27": "1", "d28": "24", "d29": "-23", "d30": "-23",
    "d31": "2", "d32": "6", "d33": "6", "d34": "2", "d35": "-6", "d36": "(-2,2)", "d37": "(-1,6)",
    "d38": "(0,6)", "d39": "(1,2)", "d40": "(2,-6)", "d41": "ada dua titik potong pada sumbu x",
    "d42": "ada dua titik potong pada sumbu x", "d43": "tidak ada titik potong pada sumbu x"
};

const STORAGE_KEY = "quiz_karakteristik_answers";

// ==========================================
// 2. FUNGSI PERIKSA JAWABAN PER BAGIAN
// ==========================================
window.periksaJawabanBagian = function(buttonElement) {
    let allCorrect = true;
    let adaKosong = false;

    const container = buttonElement.closest('.bagian-materi') || buttonElement.closest('.step-page');
    if (!container) return;

    const inputs = container.querySelectorAll('input[name], select[name]');
    if (inputs.length === 0) return;

    inputs.forEach(input => {
        const name = input.getAttribute('name');
        if (correctAnswers[name]) {
            const userAnswer = input.value.trim().toLowerCase();
            const correct = correctAnswers[name].toLowerCase();
            if (userAnswer === "") {
                adaKosong = true;
                allCorrect = false;
            } else if (userAnswer !== correct) {
                allCorrect = false;
            }
        }
    });

    if (adaKosong) {
        Swal.fire({ icon: 'warning', title: 'Belum Selesai!', text: 'Lengkapi semua jawaban pada bagian ini dulu ya.' });
    } else if (allCorrect) {
        Swal.fire({ icon: 'success', title: 'Hebat! 🎉', text: 'Semua jawaban pada bagian ini benar.' });
    } else {
        Swal.fire({ icon: 'error', title: 'Cek Lagi!', text: 'Masih ada jawaban yang salah pada bagian ini (berwarna merah).' });
    }
};

// ==========================================
// 3. LOGIKA NAVIGASI FIX & AUTO-RESTORE LOCALSTORAGE
// ==========================================
document.addEventListener("DOMContentLoaded", function() {
    const switcher = document.getElementById('materiSwitcher');
    
    // --- AMBIL SEMUA STEP PAGE (BAIK YANG SEJAJAR MAUPUN YANG TERJEBAK DI DALAM INCLUDE) ---
    const rawSteps = document.querySelectorAll('.step-page');
    
    // --- PROSES STRUKTUR FIX: Paksa keluarkan semua halaman agar berdiri mandiri di bawah switcher ---
    rawSteps.forEach(step => {
        switcher.appendChild(step);
    });
    
    // Pindahkan juga tombol navigasi ke paling bawah setelah perataan halaman selesai
    const navBar = document.querySelector('.switcher-nav');
    if (navBar) switcher.appendChild(navBar);

    // Ambil ulang data steps yang sudah rapi dan terstruktur sejajar
    const steps = document.querySelectorAll('#materiSwitcher > .step-page');
    const totalSteps = steps.length;
    
    let currentStep = 1;
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    // Ambil data lama dari localStorage
    const savedAnswers = JSON.parse(localStorage.getItem(STORAGE_KEY)) || {};

    function applyInputStyle(input, value, name) {
        if (!correctAnswers[name]) return;
        const val = value.trim().toLowerCase();
        const key = correctAnswers[name].toLowerCase();
        input.style.backgroundColor = val === "" ? "" : (val === key ? "#e8ffe8" : "#ffe8e8");
        input.style.borderColor = val === "" ? "" : (val === key ? "green" : "red");
    }

    // Isikan kembali nilai tersimpan ke elemen input/select saat reload
    Object.keys(savedAnswers).forEach(name => {
        document.querySelectorAll(`[name="${name}"]`).forEach(input => {
            input.value = savedAnswers[name];
            applyInputStyle(input, savedAnswers[name], name);
        });
    });

    // Jalankan navigasi halaman demi halaman secara murni tanpa hambatan struktur HTML
    // Jalankan navigasi halaman demi halaman secara murni tanpa hambatan struktur HTML
    function showStep(step) {
        steps.forEach((page, index) => {
            if (index + 1 === step) {
                page.style.setProperty('display', 'block', 'important');
                page.classList.add('active');
            } else {
                page.style.setProperty('display', 'none', 'important');
                page.classList.remove('active');
            }
        });

        // =========================================================
        // PERBAIKAN TOMBOL SEBELUMNYA:
        // Jika di halaman 1, sembunyikan tombol (none). Jika selain halaman 1, tampilkan (inline-block).
        // =========================================================
        if (prevBtn) {
            if (step === 1) {
                prevBtn.style.display = 'none'; // Sembunyikan total di halaman pertama
            } else {
                prevBtn.style.display = 'inline-block'; // Tampilkan kembali di halaman 2, 3, 4
            }
        }
        
        // Atur teks untuk tombol berikutnya / selesai
        if (nextBtn) {
            nextBtn.textContent = step === totalSteps ? 'Selesai' : 'Selanjutnya ➡';
        }

        // Otomatis scroll layar ke atas setiap pindah halaman agar rapi
        window.scrollTo(0,0);
    }

   nextBtn?.addEventListener('click', () => {
        if (currentStep < totalSteps) { 
            currentStep++; 
            showStep(currentStep); 
        } else { 
            // Tampilkan konfirmasi SweetAlert2 sebelum pindah kuis
            Swal.fire({
                title: 'Luar Biasa! 🎉',
                text: 'Kamu sudah menyelesaikan seluruh rangkaian materi karakteristik fungsi kuadrat. Mari kita mulai kuisnya!',
                icon: 'success',
                showCancelButton: true,
                confirmButtonColor: '#198754',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Mulai Kuis 🚀',
                cancelButtonText: 'Tutup',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Tampilkan loading screen singkat
                    Swal.fire({
                        title: 'Menghubungkan ke Kuis...',
                        allowOutsideClick: false,
                        didOpen: () => { Swal.showLoading(); }
                    });

                    // 1. Ambil data jawaban dari localStorage
                    const savedAnswers = JSON.parse(localStorage.getItem(STORAGE_KEY)) || {};

                    // 2. Buat FormData mandiri untuk mengirim data minimal agar aman dari error backend
                    const formData = new FormData();
                    formData.append('_token', "{{ csrf_token() }}");
                    
                    Object.keys(savedAnswers).forEach(key => {
                        formData.append(key, savedAnswers[key]);
                    });

                    // 3. Tembak langsung ke route evaluasi Anda secara eksplisit
                    fetch("{{ route('quiz.evaluate') }}", {
                        method: "POST",
                        body: formData,
                        headers: {
                            "X-Requested-With": "XMLHttpRequest"
                        }
                    })
                    .then(response => {
                        // Jika server merespon dengan mengalihkan halaman (Redirect), langsung ikuti
                        if (response.redirected) {
                            window.location.href = response.url;
                            return;
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Hapus penyimpanan lokal materi karena sesi materi ini sudah selesai
                        localStorage.removeItem(STORAGE_KEY);
                        
                        // LANGSUNG DIALIKKAN KE URL KUIS DENGAN PARAMETER 'karakteristik'
                        window.location.href = "{{ route('quiz.show', ['quizKey' => 'karakteristik']) }}";
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        // JIKA SERVER TIMEOUT/DOWN, TETAP PAKSA ALIKAN KE KUIS AGAR SISWA TIDAK STUCK
                        localStorage.removeItem(STORAGE_KEY);
                        window.location.href = "{{ route('quiz.show', ['quizKey' => 'karakteristik']) }}";
                    });
                }
            });
        }
    });

    prevBtn?.addEventListener('click', () => {
        if (currentStep > 1) { 
            currentStep--; 
            showStep(currentStep); 
        }
    });

    // Jalankan halaman pertama saat pertama dibuka
    showStep(currentStep);

    // Daftarkan event listener penyimpanan real-time ke semua field jawaban
    Object.keys(correctAnswers).forEach(name => {
        document.querySelectorAll(`[name="${name}"]`).forEach(input => {
            input.addEventListener("input", function() {
                applyInputStyle(input, input.value, name);
                const currentSaved = JSON.parse(localStorage.getItem(STORAGE_KEY)) || {};
                currentSaved[name] = input.value;
                localStorage.setItem(STORAGE_KEY, JSON.stringify(currentSaved));
            });
            
            if(input.tagName === 'SELECT') {
                input.addEventListener("change", function() {
                    applyInputStyle(input, input.value, name);
                    const currentSaved = JSON.parse(localStorage.getItem(STORAGE_KEY)) || {};
                    currentSaved[name] = input.value;
                    localStorage.setItem(STORAGE_KEY, JSON.stringify(currentSaved));
                });
            }
        });
    });
});
</script>

</body>
</html>
