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
                <p style="text-align: center">Gambar 4. Grafik Fungsi Kuadrat Terbuka Ke Atas Dan Ke Bawah</p>
              </div>

              <p class="mt-3" style="padding: 0 30px; text-align: justify; text-indent: 30px;">
              &nbsp;&nbsp;&nbsp;&nbsp; Berdasarkan gambar di atas, gambar a menunjukkan bentuk parabola fungsi
              kuadrat terbuka ke atas dan gambar b menunjukkan bentuk parabola fungsi
              kuadrat terbuka ke bawah. Bentuk umum dari persamaan fungsi kuadrat sebagai berikut:
              <mark> \( 𝑓(𝑥) = 𝑎𝑥^2 + 𝑏𝑥 + 𝑐 \) dengan 𝑎 ≠ 0 </mark>. Kemudian bagaimana peran nilai 𝑎, 
              𝑐, dan 𝑏. Ayoo, kita lihat pembahasan berikut ini.
              </p>

              <!-- ================= SWITCHER MULAI ================= -->
              <div id="materiSwitcher">

                <!-- STEP 1: Peran Nilai a -->
                <div class="step-page active">
                  <h5><strong>A. </strong>Peran nilai 𝑎 dalam fungsi kuadrat</h5>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp; Untuk mengetahui peran tanda pada nilai 𝑎, silahkan eksplorasi geogebra berikut:</p>
                  <div class="container-flex">
                    <div class="flex-item">
                      <iframe src="https://www.geogebra.org/calculator/yugqknmz" 
                        style="width:100%; height:500px; border:0;" allowfullscreen allow="geogebra"></iframe>
                    </div>

                    <div class="flex-item">
                      <form method="POST" action="">
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
                      </form>
                    </div>
                  </div>

                  <form action="{{route('quiz.evaluate')}}" method="POST">
                    @csrf 
                    <p>Berdasarkan hasil eksplorasi, nilai <b>a</b> menentukan
                      <input type="text" name="arah1" style="width: 50px;"> dan 
                      <input type="text" name="arah2" style="width: 120px;">.
                      Jika <b>a > 0</b>, parabola terbuka ke 
                      <input type="text" name="arah3" style="width: 50px;">
                      Jika <b>a < 0</b>, parabola terbuka ke 
                      <input type="text" name="arah4" style="width: 70px;">.
                    </p>
                    <p>Semakin besar nilai a maka parabola semakin 
                      <input type="text" name="lebar1" style="width: 70px;">
                      , semakin kecil nilai a maka parabola semakin 
                      <input type="text" name="lebar2" style="width:50px;">.
                    </p>
                    <p>Nilai a juga menentukan kekonvexan grafik. Grafik dengan a > 0 adalah konkaf (cekung) ke atas
                      dan grafik dengan a < 0 adalah konveks (cembung) ke bawah.
                    </p>
                  </form>
                  <div class="my-4">
    <!-- Menampilkan hasil inputan -->
    <?php
    if (!empty($input_values)) {
      echo "<h4>Hasil Inputan:</h4><pre>";
        print_r($input_values);
        echo "</pre>";
      }
    ?>
  </div>
</li>
<div>
@include('pages.materi.karakteristik.contoh')
@include('pages.materi.karakteristik.latihan')
                </div>


                <div class="step-page">
                  <h5><strong>B. </strong>Peran nilai c dalam fungsi kuadrat</h5>
                  <p>Nilai c adalah konstanta (saat x=0, maka y=c). Eksplorasi peran c di Geogebra berikut:</p>
                  <div class="container-flex">
                    <div class="flex-item">
                      <iframe src="https://www.geogebra.org/calculator/truxmykq" 
                        style="width:100%; height:500px; border:0;" allowfullscreen allow="geogebra"></iframe>
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
        <p>
          Berdasarkan hasil eksplorasi kalian, maka nilai 𝑐 menentukan <input type="text" name="input_1" class="form-control d-inline w-auto @error('input_1') is-invalid @enderror" value="{{old('input_1')}}" style="width: 60px;">
          dengan sumbu <input type="text" name="sumbu" class="form-control d-inline w-auto @error('sumbu') is-invalid @enderror" value="{{old('sumbu')}}" style="width: 50px !important;">. 
          Nilai 𝑐 merupakan nilai dari fungsi ketika 𝑥 = 0. Jadi, titik potong grafik dengan sumbu 
          <input type="text" name="sumbu_kedua" class="form-control d-inline w-auto @error('sumbu_kedua') is-invalid @enderror" value="{{old('sumbu_kedua')}}" style="width: 50px !important;"> adalah di titik 
          (<input type="text" name="x" class="form-control d-inline w-auto @error('x') is-invalid @enderror" value="{{old('x')}}" style="width: 50px !important;">, 
          <input type="text" name="y" class="form-control d-inline w-auto @error('y') is-invalid @enderror" value="{{old('y')}}" style="width: 50px !important;">). Nilai 𝑐 juga menggeser grafik 
          fungsi kuadrat secara vertikal. Jika 𝑐 meningkat, grafik akan bergeser ke 
          <input type="text" name="up_direction" class="form-control d-inline w-auto @error('up_direction') is-invalid @enderror" value="{{old('up_direction')}}" style="width: 60px !important;">. Sebaliknya, jika 𝑐 menurun, 
          grafik akan bergeser ke <input type="text" name="down_direction" class="form-control d-inline w-auto @error('down_direction') is-invalid @enderror" value="{{old('down_direction')}}" style="width: 60px;">.
        </p>
        <form action="{{route('quiz.evaluate')}}" method="POST">
          @csrf
          <p>Untuk lebih paham mengetahui nilai 𝑐, ayoo kita kerjakan contoh dan latihan soal berikut ya!</p>
          <span class="border border-primary p-2 my-2 rounded">Contoh Soal: </span>
          <div class="py-2 mt-3">
            <p>1. \( f(x)=x^2-2x-2 \). Tentukan titik potong dengan sumbu 𝑦 dan nilai 𝑐.</p>
          </div>
            <span class="border border-primary p-2 my-2 rounded">Jawab: </span>
            <div class="py-2 mt-3">
              <p>Titik potong dengan sumbu \( y \) adalah \( (0, -2)\) dan nilai \( c \) adalah <input type="text" name="contoh" placeholder="" style="width: 50px;"></p>
            </div>
            <span class="border border-primary p-2 my-2 rounded">Latihan Soal: </span>
            <div class="py-2 mt-3">
              <p>1. Diketahui persamaan \( f(x)=x^2+2x \). Nilai 𝑐 yang memenuhi adalah <input type="text" name="latihan_1_c" placeholder="" style="width: 50px;"> serta titik potong dengan sumbu 𝑦 yaitu <input type="text" name="latihan_1_y" placeholder="" style="width: 50px;"></p>
              <p>2. Diketahui Persamaan \( f(x)=-x^2-x+3 \). Nilai 𝑐 yang memenuhi adalah <input type="text" name="latihan_2_c" placeholder="" style="width: 50px;"> serta titik potong dengan sumbu 𝑦 yaitu <input type="text" name="latihan_2_y" placeholder="" style="width: 50px;"></p>
              <p>3. Diketahui Persamaan \( f(x)=-x^2-3x+3 \). Nilai 𝑐 yang memenuhi adalah <input type="text" name="latihan_3_c" placeholder="" style="width: 50px;"> serta titik potong dengan sumbu 𝑦 yaitu <input type="text" name="latihan_3_y" placeholder="" style="width: 50px;"></p>
              <p>4. Isilah tabel berikut ini:</p>
            <div class="text-center">
              <table class="table table-bordered table-hover text-center" style="height: 50px">
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
                    <td><input type="text" name="fungsi_1_1" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="text" name="fungsi_1_2" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="text" name="fungsi_1_3" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="text" name="fungsi_1_4" class="form-control" placeholder="" style="width: 100px;"></td>
                    <td><input type="text" name="fungsi_1_5" class="form-control" placeholder="" style="width: 100px;"></td>
                  </tr>
                  <tr>
                    <td>\( f(x)=-2x^2-2x+6 \)</td>
                    <td><input type="text" name="fungsi_2_1" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="text" name="fungsi_2_2" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="text" name="fungsi_2_3" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="text" name="fungsi_2_4" class="form-control" placeholder="" style="width: 100px;"></td>
                    <td><input type="text" name="fungsi_2_5" class="form-control" placeholder="" style="width: 100px;"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="text-center mt-4 mb-5">
          <button type="button" class="btn btn-primary btn-lg px-5 shadow" onclick="periksaJawabanHalamanIni()">
              Kirim Jawaban
          </button>
        </div>
        </form>
                </div>
                <!-- STEP 2: Peran Nilai b -->
                <div class="step-page">
                  <h5><strong>C. </strong>Peran nilai \( b \) dalam fungsi kuadrat </h5>
          <p class="mt-3" style="padding: 0 10px; text-align: justify;">
            &nbsp;&nbsp;&nbsp;&nbsp;
            Nilai \( b \) disebut koefisien linier. Nilai \( b \) mempengaruhi letak sumbu simetri dan posisi puncak parabola.
            Nilai \( b \) juga menggeser puncak parabola ke kiri dan ke kanan.
            Sumbu simetri dari parabola adalah garis vertikal yang melewati titik puncak, sehingga membagi parabola menjadi dua bagian yang simetris.
            Persamaan dari sumbu simteri adalah <mark> \( x=-\frac{b}{2a} \) </mark>. Sumbu simetri selalu melalui titik puncak, x = 1.
            Titik puncak (vertex) dari sebuah parabola yang berbentuk <mark> \( y=ax^2+bx+c \) </mark> terletak di koordinat (𝑥, 𝑦) dimana:
          </p>
          <p>- Titik puncak fungsi kuadrat yaitu \(x_p , y_p \) dengan \( x_p=-\frac{b}{2a} \) dan \( y_p=-\frac{D}{4a} \) </p>
          <p>- Koordinat 𝑦 dari titik puncak dapat ditemukan dengan memasukkan nilai 𝑥 tersebut ke dalam persamaan kuadrat.</p>
        </li>
        <p> Agar lebih jelas, ayoo kita pahami contoh soal dan latihan berikut ini! </p>
        <span class="border border-primary p-2 my-2 rounded">Contoh Soal: </span>
        <p class="mt-3" style="padding: 0 30px;"> Diketahui fungsi kuadrat \( f(x)=2x^2-4x+1 \). Tentukan titik puncak, sumbu simetri serta apakah titik puncak adalah titik maksimum atau titik minimum? </p>
        <span class="border border-primary p-2 my-2 rounded">Jawab: </span>
        <ol type="a" class="mt-3">
          <li>
            Menentukan titik puncak:
            <p>- Nilai 𝑎 = 2, 𝑏 = −4, dan 𝑐 = 1</p>
            <p>- Koordinat 𝑥 dari titik puncak: \( 𝑥 = -\frac{b}{2a} = -\frac{(-4)}{2(2)} = \frac{4}{4} = \) <input type="text" name="b1" placeholder="" style="width: 50px;"></p>
            <p>- Koordinat 𝑦 dari titik puncak: \( y = 2(1)^2-4(1)+1 \) = <input type="text" name="b2" placeholder="" style="width: 50px;"> − <input type="text" name="b3" placeholder="" style="width: 50px;"> + <input type="text" name="b4" placeholder="" style="width: 50px;"> = <input type="text" name="b5" placeholder="" style="width: 50px;"></p>
            <p>- Jadi, titik puncak adalah (<input type="text" name="b6" placeholder="" style="width: 50px;">, <input type="text" name="b7" placeholder="" style="width: 50px;">).</p>
          </li>
          <li>
            Menentukan sumbu simetri:
            <p>- Sumbu simetri adalah garis vertical 𝑥 = 1</p>
          </li>
          <li>
            Menentukan apakah titik puncak adalah titik maksimum atau titik minimum:
            <p>- Karena 𝑎 = 2 (positif), parabola terbuka ke <input type="text" name="b8" placeholder="" style="width: 50px;">, sehingga titik puncak
              (<input type="text" name="b9" placeholder="" style="width: 50px;">, <input type="text" name="b10" placeholder="" style="width: 50px;">) adalah titik minimum.</p>
          </li>
          <span class="border border-primary p-2 my-2 rounded">Latihan Soal: </span>
          <ol>
            <li>
              <div> 
                <div class="mt-3">
                  Diketahui fungsi kuadrat \( y=2x^2+4x+4 \). Tentukan titik puncak, sumbu simetri serta apakah titik puncak adalah titik maksimum atau titik minimum?
                </div>
                <span class="border border-primary p-2 my-2 rounded">Jawab: </span>
                  <ol type="a" class="mt-3">
                    <li>
                      Menentukan titik puncak:
                      <p>- Nilai 𝑎 = <input type="text" name="b_lat_1" placeholder="" style="width: 50px;">, 𝑏= <input type="text" name="b_lat_2" placeholder="" style="width: 50px;"> dan 𝑐 = <input type="text" name="b_lat_3" placeholder="" style="width: 50px;"></p>
                      <p>- Koordinat \( x \) dari titik puncak: \( x= \frac{-b}{2a} \)</p>
                      <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                        <span>\( x = \)</span>

                        <!-- Pecahan 1 -->
                        <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                          <input type="text" name="b_lat_4" id="user_x_num_step1" placeholder="" style="width: 40px;">
                          <hr style="margin: 0.1rem 0; border: 1px solid black;">
                          <input type="text" name="b_lat_5" id="user_x_den_step1" placeholder="" style="width: 40px;">
                        </div>
                        <span>=</span>

                        <!-- Pecahan 2 -->
                        <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                          <input type="text" name="b_lat_6" id="user_x_num_step2" placeholder="" style="width: 40px;">
                          <hr style="margin: 0.1rem 0; border: 1px solid black;">
                          <input type="text" name="b_lat_7" id="user_x_den_step2" placeholder="" style="width: 40px;">
                        </div>
                        <span>=</span>

                        <!-- Jawaban akhir -->
                        <input type="text" name="b_lat_8" id="user_result_x" placeholder="" style="width: 50px;">
                        <span></span>
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
                        <p>- Jadi, titik puncaknya adalah = (<input type="text" name="b_lat_17" placeholder="" style="width: 50px;">,<input type="text" name="b_lat_18" placeholder="" style="width: 50px;">)</p>
                        </li>
                        <li>
                        Menentukan sumbu simetri:
                        <p>- Sumbu simteri adalah garis vertical 𝑥 = <input type="text" name="b_lat_19" placeholder="" style="width: 50px;"></p>
                        </li>
                        <li>
                        Menentukan apakah titik puncak adalah titik maksimum atau titik minimum:
                        <p>- Karena 𝑎 = <input type="text" name="b_lat_20" placeholder="" style="width: 50px;">, parabola tebuka ke <input type="text" name="b_lat_21" placeholder="" style="width: 50px;">, sehingga titik puncak
                          (<input type="text" name="b_lat_22" placeholder="" style="width: 50px;">, <input type="text" name="b_lat_23" placeholder="" style="width: 50px;">) adalah titik <input type="text" name="b_lat_24" placeholder="" style="width: 70px;"></p>
                        </li>
                    </div>
                    <li>
                    <div>
                    <div class="mt-3">
                    Diketahui fungsi kuadrat \( y=-x^2+4x-4 \). Tentukan titik puncak, sumbu simetri serta apakah titik puncak adalah titik maksimum atau titik minimum?
                    </div>
                    <span class="border border-primary p-2 my-2 rounded">Penyelesaian: </span>
                    <ol type="a" class="mt-3">
                      <li>
                      Menentukan titik puncak:
                      <p>- Nilai 𝑎 = <input type="text" name="b_lat_25" placeholder="" style="width: 50px;">, 𝑏= <input type="text" name="b_lat_26" placeholder="" style="width: 50px;"> dan 𝑐 =<input type="text" name="b_lat_27" placeholder="" style="width: 50px;"></p>
                      <p>- Koordinat \( x \) dari titik puncak: \( x= \frac{-b}{2a} \)</p>
                      <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                        <span>\( x = \)</span>

                        <!-- Pecahan 1 -->
                        <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                          <input type="text" id="user_x_num_step1" name="b_lat_28" placeholder="" style="width: 40px;">
                          <hr style="margin: 0.1rem 0; border: 1px solid black;">
                          <input type="text" id="user_x_den_step1" name="b_lat_29" placeholder="" style="width: 40px;">
                        </div>

                        <span>=</span>

                        <!-- Pecahan 2 -->
                        <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                          <input type="text" id="user_x_num_step2" name="b_lat_30" placeholder="" style="width: 40px;">
                          <hr style="margin: 0.1rem 0; border: 1px solid black;">
                          <input type="text" id="user_x_den_step2" name="b_lat_31" placeholder="" style="width: 40px;">
                        </div>

                        <span>=</span>

                        <!-- Jawaban akhir -->
                        <input type="text" id="user_result_x" name="b_lat_32" placeholder="" style="width: 50px;">

                        <span></span>
                      </div>

                      <p>- Koordinat 𝑦 dari titik puncak: \( y = -x^2+4x-4 \) = <input type="text" name="b_lat_33" placeholder="" style="width: 50px;"><sup>2</sup> + <input type="text" name="b_lat_34" placeholder="" style="width: 50px;"> - <input type="text" name="b_lat_35" placeholder="" style="width: 50px;">
                      = <input type="text" name="b_lat_36" placeholder="" style="width: 50px;"> + <input type="text" name="b_lat_37" placeholder="" style="width: 50px;"> - <input type="text" name="b_lat_38" placeholder="" style="width: 50px;">
                      = <input type="text" name="b_lat_39" placeholder="" style="width: 50px;"></p>
                      <p>- Jadi, titik puncaknya adalah (<input type="text" name="b_lat_41" placeholder="" style="width: 50px;">,<input type="text" name="b_lat_42" placeholder="" style="width: 50px;">)</p>
                      </li>
                      <li>
                      Menentukan sumbu simetri:
                      <p>- Sumbu simetri adalah garis vertical 𝑥 = <input type="text" name="b_lat_40" placeholder="" style="width: 50px;"></p>
                      </li>
                      <li>
                      Menentukan apakah titik puncak adalah titik maksimum atau titik minimum:
                      <p>- Karena 𝑎 = <input type="text" name="b_lat_43" placeholder="" style="width: 50px;">, parabola tebuka ke <input type="text" name="b_lat_44" placeholder="" style="width: 60px;">, sehingga titik puncak
                        (<input type="text" name="b_lat_45" placeholder="" style="width: 50px;">, <input type="text" name="b_lat_46" placeholder="" style="width: 50px;">) adalah titik <input type="text" name="b_lat_47" placeholder="" style="width: 90px;">
                      </p>
                      </li>
                    </div>
                    <div class="text-center mt-4 mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-5 shadow" onclick="periksaJawabanHalamanIni()">
                        Kirim Jawaban
                    </button>
                  </div>
                </div>

                <!-- STEP 3: Peran Nilai c -->
                

                <!-- STEP 4: Diskriminan -->
<div class="step-page">
  <div class="p-3 mb-3">
    <div>
      <h5><strong>D.</strong> Nilai diskriminan dalam fungsi kuadrat</h5>
      <p>
        Diskriminan adalah nilai <mark>\( D = b^2 - 4ac \)</mark> untuk persamaan kuadrat
        <mark>\( ax^2 + bx + c = 0 \)</mark>.
        Diskriminan digunakan untuk menentukan jenis dan banyaknya akar persamaan kuadrat.
        Contohnya seperti pada gambar di bawah ini:
      </p>

    <div class="text-center">
      <img src="{{ asset('assets/img/app/karakteristik11.png') }}"
           alt="Contoh grafik fungsi kuadrat berbentuk parabola" class="img-fluid">
      <p>Gambar 8. Titik Potong dengan Sumbu 𝑥</p>
    </div>

    <div>
      Pada fungsi kuadrat berbentuk \( y=f(x)=ax^2+bx+c \), diskriminan diberikan oleh nilai
      \( D = b^2-4ac \) untuk menentukan jumlah titik potong dengan sumbu x.
      <br>𝐷 > 0 maka ada dua titik potong pada sumbu x.
      <br>𝐷 = 0 maka ada satu titik potong pada sumbu x.
      <br>𝐷 < 0 maka tidak ada titik potong pada sumbu x.
    </div>
  </div>

  <span class="border border-primary p-2 my-2 rounded mt-3 d-inline-block">Contoh Soal:</span>
  <div class="my-3">
    Hitunglah nilai diskriminan dari fungsi \( f(x)=-x^2-x+2\) !
  </div>

  <span class="border border-primary p-2 my-2 rounded mt-3 d-inline-block">Penyelesaian:</span>
  <div class="mt-3">
    <ol type="a">
      <li>
        Menentukan nilai 𝑎, 𝑏, dan 𝑐
        <p>- Nilai 𝑎 = −1, 𝑏 = -1, dan 𝑐 = 2</p>
      </li>
      <li>
        Menghitung nilai diskriminan:
        <p>
          - \( D=b^2-4ac \) =
          <input type="text" name="d1" style="width: 50px;"><sup>2</sup> −
          <input type="text" name="d2" style="width: 50px;"> (
          <input type="text" name="d3" style="width: 50px;">)(
          <input type="text" name="d4" style="width: 50px;">) =
          <input type="text" name="d5" style="width: 50px;"> +
          <input type="text" name="d6" style="width: 50px;"> =
          <input type="text" name="d7" style="width: 50px;">
        </p>
        <p>- Jadi, nilai diskriminan adalah <input type="text" name="d8" style="width: 50px;"> artinya <input type="text" name="d41" style="width: 250px;"></p>
      </li>
    </ol>
  </div>

  <span class="border border-primary p-2 my-2 rounded mt-3 d-inline-block">Latihan Soal:</span>

  <div class="my-3">
    1. Hitunglah nilai diskriminan dari fungsi \( f(x)=3x^2-9x-12 \) !
  </div>

  <span class="border border-primary p-2 my-2 rounded mt-3 d-inline-block">Penyelesaian:</span>
  <div class="mt-3">
    <ol type="a">
      <li>
        Menentukan nilai 𝑎, 𝑏, dan 𝑐
        <p>
          - Nilai 𝑎 = <input type="text" name="d9" style="width: 50px;">,
          𝑏 = <input type="text" name="d10" style="width: 50px;">,
          𝑐 = <input type="text" name="d11" style="width: 50px;">
        </p>
      </li>
      <li>
        Menghitung nilai diskriminan:
        <p>
          - \( D=b^2-4ac \) =
          <input type="text" name="d12" style="width: 50px;"><sup>2</sup> -
          <input type="text" name="d13" style="width: 50px;">(
          <input type="text" name="d14" style="width: 50px;">)(
          <input type="text" name="d15" style="width: 50px;">) =
          <input type="text" name="d16" style="width: 50px;"> +
          <input type="text" name="d17" style="width: 50px;"> =
          <input type="text" name="d18" style="width: 50px;">
        </p>
        <p>- Jadi, nilai diskriminan adalah <input type="text" name="d19" style="width: 50px;"> artinya <input type="text" name="d42" style="width: 250px;"></p>
      </li>
    </ol>
  </div>

  <div class="my-3">
    2. Hitunglah nilai diskriminan dari fungsi \( f(x)=2x^2-x+3 \) !
  </div>

  <span class="border border-primary p-2 my-2 rounded mt-3 d-inline-block">Penyelesaian:</span>
  <div class="mt-3">
    <ol type="a">
      <li>
        Menentukan nilai 𝑎, 𝑏, dan 𝑐
        <p>
          - Nilai 𝑎 = <input type="text" name="d20" style="width: 50px;">,
          𝑏 = <input type="text" name="d21" style="width: 50px;">,
          𝑐 = <input type="text" name="d22" style="width: 50px;">
        </p>
      </li>
      <li>
        Menghitung nilai diskriminan:
        <p>
          - \( D=b^2-4ac \) =
          <input type="text" name="d23" style="width: 50px;"><sup>2</sup> -
          <input type="text" name="d24" style="width: 50px;">(
          <input type="text" name="d25" style="width: 50px;">)(
          <input type="text" name="d26" style="width: 50px;">) =
          <input type="text" name="d27" style="width: 50px;"> -
          <input type="text" name="d28" style="width: 50px;"> =
          <input type="text" name="d29" style="width: 50px;">
        </p>
        <p>- Jadi, nilai diskriminan adalah <input type="text" name="d30" style="width: 50px;"> artinya <input type="text" name="d43" style="width: 280px;"></p>
      </li>
    </ol>
  </div>
  
  <hr>

  <!-- Membuat grafik -->
  <div class="my-4 text-center">
    <img src="{{ asset('assets/img/app/ayomembaca.png') }}"
         alt="Contoh grafik fungsi kuadrat berbentuk parabola"
         class="img-fluid">
  </div>

  <ol>
    <li class="mt-3">
      Buatlah Grafik fungsi \( f(x) = x^2 + 1 \) dengan cara berikut:
      <ol type="a">
        <li>
          Melengkapi tabel:
          <div style="display: flex; gap: 24px; align-items: flex-start; flex-wrap: wrap;">
            <!-- Kiri: TABEL -->
            <div style="flex:1; min-width:250px;">
              <div class="table-responsive">
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
            </div>
            <!-- Kanan: GeoGebra -->
            <div style="flex:1; min-width:250px;">
              <iframe 
                src="https://www.geogebra.org/calculator/tmpyggsm" 
                style="width: 100%; height: 380px; border:0;"
                allowfullscreen allow="geogebra">
              </iframe>
              <p class="text-center">Plot titik grafik dan hubungkan titik</p>
            </div>
          </div>
        </li>
        <li>
          Plot setiap titik pada tabel ke dalam sistem koordinat.
          Koordinat titik yang didapatkan dari tabel adalah (-2,5), (-1,2), (0,1), (1,2), dan (2,5).
          Kemudian hubungkan titik sehingga didapatkan grafik fungsinya.
        </li>
      </ol>
    </li>

    <li class="mt-3">
      Buatlah grafik \( f(x) = -2x^2 - 2x + 6 \)
      <ol type="a">
        <li>
          Melengkapi tabel:
          <div style="display: flex; gap: 24px; align-items: flex-start; flex-wrap: wrap;">
            <!-- Kolom kiri -->
            <div style="flex:1; min-width:250px;">
              <div class="text-center">
                <table class="table table-bordered table-hover text-center">
                  <thead class="bg-info text-white">
                    <p style="text-align: center">Tabel 6. Grafik fungsi \( f(x)=-2x^2-2x+6 \)</p>
                    <tr><td colspan="2">\( f(x)=-2x^2-2x+6 \)</td></tr>
                  </thead>
                  <tbody>
                    <tr><td><b>x</b></td><td><b>Y</b></td></tr>
                    <tr><td>-2</td><td><input type="text" name="d31" class="form-control text-center mx-auto"></td></tr>
                    <tr><td>-1</td><td><input type="text" name="d32" class="form-control text-center mx-auto"></td></tr>
                    <tr><td>0</td><td><input type="text" name="d33" class="form-control text-center mx-auto"></td></tr>
                    <tr><td>1</td><td><input type="text" name="d34" class="form-control text-center mx-auto"></td></tr>
                    <tr><td>2</td><td><input type="text" name="d35" class="form-control text-center mx-auto"></td></tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Kolom kanan -->
            <div style="flex:1; min-width:250px;">
              <iframe 
                src="https://www.geogebra.org/calculator"
                style="width: 100%; height: 380px; border:0;"
                allowfullscreen allow="geogebra">
              </iframe>
              <p class="text-center">GeoGebra Grafik</p>
            </div>
          </div>
        </li>
        <li>
          Plot setiap titik dari tabel ke sistem koordinat dan hubungkan grafiknya.
          Koordinat titik yang didapatkan dari tabel adalah
          <input type="text" name="d36" class="form-control d-inline-block" style="width: 70px;" placeholder="">,
          <input type="text" name="d37" class="form-control d-inline-block" style="width: 70px;" placeholder="">,
          <input type="text" name="d38" class="form-control d-inline-block" style="width: 70px;" placeholder="">,
          <input type="text" name="d39" class="form-control d-inline-block" style="width: 70px;" placeholder="">,
          <input type="text" name="d40" class="form-control d-inline-block" style="width: 70px;" placeholder="">.
        </li>
      </ol>
    </li>
  </ol>
  <div class="text-center mt-4 mb-5">
    <button type="button" class="btn btn-primary btn-lg px-5 shadow" onclick="periksaJawabanHalamanIni()">
      Kirim Jawaban
    </button>
  </div>
</div>
                </div>
                <!-- NAVIGATION BUTTON -->
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
    <div class="modal-content text-center">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title w-100" id="finishModalLabel">🎉 Selamat!</h5>
      </div>
      <div class="modal-body">
        <p>Semua langkah sudah selesai. Bagus sekali, kamu sudah menyelesaikan materi ini! 🎓</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
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
    // --- Nilai a (Karakteristik Awal) ---
    "nilai[-2]": "bawah", "nilai[3]": "atas", "nilai[-5]": "bawah", "nilai[2]": "atas", "nilai[-1]": "bawah",
    "arah1": "arah", "arah2": "lebar parabola", "arah3": "atas", "arah4": "bawah",
    "lebar1": "sempit", "lebar2": "lebar", "fungsi_terbuka1": "atas", "fungsi_terbuka2": "bawah",
    "nilai1": "positif", "nilai2": "negatif",

    // --- Nilai c (Karakteristik 2) ---
    "input_1": "titik potong", "sumbu": "y", "sumbu_kedua": "y", "x": "0", "y": "c", "up_direction": "atas", "down_direction": "bawah",
    "c_1": "(0,5)", "c_2": "(0,8)", "c_3": "(0,-3)", "c_4": "(0,-6)", "c_5": "(0,-9)", "contoh": "-2",
    "latihan_1_c": "0", "latihan_1_y": "(0,0)", "latihan_2_c": "3", "latihan_2_y": "(0,3)", "latihan_3_c": "3", "latihan_3_y": "(0,3)",
    "fungsi_1_1": "2", "fungsi_1_2": "-1", "fungsi_1_3": "3", "fungsi_1_4": "atas", "fungsi_1_5": "(0,3)",
    "fungsi_2_1": "-2", "fungsi_2_2": "-2", "fungsi_2_3": "6", "fungsi_2_4": "bawah", "fungsi_2_5": "(0,6)",

    // --- Nilai b (Latihan b_lat) ---
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

    // --- Diskriminan (Latihan d) ---
    "d1": "(-1)", "d2": "4", "d3": "-1", "d4": "2", "d5": "1", "d6": "8", "d7": "9", "d8": "9", "d9": "3",
    "d10": "-9", "d11": "-12", "d12": "(-9)", "d13": "4", "d14": "3", "d15": "-12", "d16": "81",
    "d17": "144", "d18": "225", "d19": "225", "d20": "2", "d21": "-1", "d22": "3", "d23": "(-1)",
    "d24": "4", "d25": "2", "d26": "3", "d27": "1", "d28": "24", "d29": "-23", "d30": "-23",
    "d31": "2", "d32": "6", "d33": "6", "d34": "2", "d35": "-6", "d36": "(-2,2)", "d37": "(-1,6)",
    "d38": "(0,6)", "d39": "(1,2)", "d40": "(2,-6)", "d41": "ada dua titik potong pada sumbu x",
    "d42": "ada dua titik potong pada sumbu x", "d43": "tidak ada titik potong pada sumbu x"
};

// ==========================================
// 2. FUNGSI PERIKSA (PANGGIL DARI TOMBOL)
// ==========================================
window.periksaJawabanHalamanIni = function() {
    let allCorrect = true;
    let adaKosong = false;
    const activePage = document.querySelector('.step-page.active');
    if (!activePage) return;

    const inputs = activePage.querySelectorAll('input[name]');
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
        Swal.fire({ icon: 'warning', title: 'Belum Selesai!', text: 'Lengkapi semua jawaban di halaman ini dulu ya.' });
    } else if (allCorrect) {
        Swal.fire({ icon: 'success', title: 'Hebat! 🎉', text: 'Semua jawaban di halaman ini benar.' });
    } else {
        Swal.fire({ icon: 'error', title: 'Cek Lagi!', text: 'Masih ada jawaban yang salah (warna merah).' });
    }
};

// ==========================================
// 3. LOGIKA NAVIGASI & WARNA OTOMATIS
// ==========================================
document.addEventListener("DOMContentLoaded", function() {
    let currentStep = 1;
    const steps = document.querySelectorAll('#materiSwitcher .step-page');
    const totalSteps = steps.length;
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    function showStep(step) {
        steps.forEach((page, index) => {
            page.classList.toggle('active', index + 1 === step);
        });
        if (prevBtn) prevBtn.disabled = step === 1;
        if (nextBtn) nextBtn.textContent = step === totalSteps ? 'Selesai' : 'Selanjutnya ➡';
        window.scrollTo(0,0);
    }

    nextBtn?.addEventListener('click', () => {
        if (currentStep < totalSteps) { currentStep++; showStep(currentStep); }
        else { new bootstrap.Modal(document.getElementById('finishModal')).show(); }
    });

    prevBtn?.addEventListener('click', () => {
        if (currentStep > 1) { currentStep--; showStep(currentStep); }
    });

    showStep(currentStep);

    // Warna Hijau/Merah saat mengetik
    Object.keys(correctAnswers).forEach(name => {
        document.querySelectorAll(`[name="${name}"]`).forEach(input => {
            input.addEventListener("input", function() {
                const val = input.value.trim().toLowerCase();
                const key = correctAnswers[name].toLowerCase();
                input.style.backgroundColor = val === "" ? "" : (val === key ? "#e8ffe8" : "#ffe8e8");
                input.style.borderColor = val === "" ? "" : (val === key ? "green" : "red");
            });
        });
    });
});
</script>

</body>
</html>
