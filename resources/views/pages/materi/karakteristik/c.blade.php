
  <h5>Peran nilai c dalam fungsi kuadrat </h5>
  <p class="mt-3" style="padding: 0 10px; text-align: justify;">
    &nbsp;&nbsp;&nbsp;&nbsp; 
    Nilai 𝑐 disebut konstanta. Saat 𝑥 = 0, maka 𝑦 = 𝑐. Untuk mengetahui lebih lanjut peran tanda pada nilai 𝑐, silahkan kalian
    eksplorasi pada geogebra nilai 𝑐. Isilah nilai 𝑐 dalam tabel pengamatan lalu tentukan titik potong dengan sumbu 𝑦. </p>
    <div class="container-flex">
      <div class="flex-item">
        <iframe 
          src="https://www.geogebra.org/calculator/truxmykq" 
          style="width: 100%; height: 500px; border:0; display: block;"
          allowfullscreen
          allow="geogebra">
        </iframe>
      </div>
      <!-- masukan tabel -->
      <div class="text-center">  
        <table class="table table-bordered table-hover text-center">
          <thead class="bg-info text-white">
            <tr>
              <td class="text-center text-white" style="width: 200px;">Peran nilai \( c \)</td>
              <td class="text-center text-white" style="width: 200px;">Titik potong dengan sumbu \( y \)</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>\( c=1 \)</td>
              <td>\( (0,1) \)</td>
            </tr>
            <tr>
              <td><input type="number" class="form-control" placeholder="Isi nilai"></td>
              <td><input type="number" class="form-control" placeholder="Isi nilai"></td>
            </tr>
            <tr>
              <td><input type="number" class="form-control" placeholder="Isi nilai"></td>
              <td><input type="number" class="form-control" placeholder="Isi nilai"></td>
            </tr>
            <tr>
              <td><input type="number" class="form-control" placeholder="Isi nilai"></td>
              <td><input type="number" class="form-control" placeholder="Isi nilai"></td>
            </tr>
            <tr>
              <td><input type="number" class="form-control" placeholder="Isi nilai"></td>
              <td><input type="number" class="form-control" placeholder="Isi nilai"></td>
            </tr>
            <tr>
              <td><input type="number" class="form-control" placeholder="Isi nilai"></td>
              <td><input type="number" class="form-control" placeholder="Isi nilai"></td>
            </tr>
          </tbody>
        </table>
        </div>
         <p>
          Berdasarkan hasil eksplorasi kalian, maka nilai 𝑐 menentukan <input type="text" placeholder="" style="width: 50px;">
          dengan sumbu <input type="text" name="sumbu" class="form-control d-inline w-auto @error('sumbu') is-invalid @enderror" placeholder="Isi sumbu" value="{{old('sumbu')}}" style="width: 50px !important;">. 
          Nilai 𝑐 merupakan nilai dari fungsi ketika 𝑥 = 0. Jadi, titik potong grafik dengan sumbu 
          <input type="text" name="sumbu_kedua" class="form-control d-inline w-auto @error('sumbu_kedua') is-invalid @enderror" placeholder="Isi sumbu" value="{{old('sumbu_kedua')}}" style="width: 50px !important;"> adalah di titik 
          (<input type="number" name="x" class="form-control d-inline w-auto @error('x') is-invalid @enderror" placeholder="x" value="{{old('x')}}" style="width: 50px !important;">, 
          <input type="number" name="y" class="form-control d-inline w-auto @error('y') is-invalid @enderror" placeholder="y" value="{{old('y')}}" style="width: 50px !important;">). Nilai 𝑐 juga menggeser grafik 
          fungsi kuadrat secara vertikal. Jika 𝑐 meningkat, grafik akan bergeser ke 
          <input type="text" name="up_direction" class="form-control d-inline w-auto @error('up_direction') is-invalid @enderror" placeholder="Isi arah" value="{{old('up_direction')}}" style="width: 50px !important;">. Sebaliknya, jika 𝑐 menurun, 
          grafik akan bergeser ke <input type="text" name="down_direction" class="form-control d-inline w-auto @error('down_direction') is-invalid @enderror" placeholder="Isi arah" value="{{old('down_direction')}}" style="width: 50px !important;">.
        </p>
        <button type="submit" class="btn btn-primary mt-3">Kirim Jawaban</button>
        <form action="{{route('quiz.evaluate')}}" method="POST">
          @csrf
          <p>Untuk lebih paham mengetahui nilai 𝑐, ayoo kita kerjakan contoh dan latihan soal berikut ya!</p>
          <span class="border border-primary p-2 my-2 rounded">Contoh Soal: </span>
          <div class="py-2 mt-3">
            <p>1. \( f(x)=x^2-2x-2 \). Tentukan titik potong dengan sumbu 𝑦 dan nilai 𝑐.</p>
          </div>
            <span class="border border-primary p-2 my-2 rounded">Jawab: </span>
            <div class="py-2 mt-3">
              <p>Titik potong dengan sumbu \( y \) adalah \( 0, -2\) dan nilai \( c \) adalah <input type="text" placeholder="" style="width: 50px;"></p>
            </div>
            <span class="border border-primary p-2 my-2 rounded">Latihan Soal: </span>
            <div class="py-2 mt-3">
              <p>1. Diketahui persamaan \( f(x)=x^2+2x \). Nilai 𝑐 yang memenuhi adalah <input type="text" placeholder="" style="width: 50px;"> serta titik potong dengan sumbu 𝑦 yaitu <input type="text" placeholder="" style="width: 50px;"></p>
              <p>2. Diketahui Persamaan \( f(x)=-x^2-x+3 \). Nilai 𝑐 yang memenuhi adalah <input type="text" placeholder="" style="width: 50px;"> serta titik potong dengan sumbu 𝑦 yaitu <input type="text" placeholder="" style="width: 50px;"></p>
              <p>3. Diketahui Persamaan \( f(x)=-x^2-3x+3 \). Nilai 𝑐 yang memenuhi adalah <input type="text" placeholder="" style="width: 50px;"> serta titik potong dengan sumbu 𝑦 yaitu <input type="text" placeholder="" style="width: 50px;"></p>
              <p>4. Isilah tabel berikut ini:</p>
            <div class="text-center">
              <table class="table table-bordered table-hover text-center" style="height: 50px">
                <thead class="bg-info text-white">
                  <tr>
                    <td>Persamaan Fungsi</td>
                    <td>Nilai \( a \)</td>
                    <td>Nilai \( b \)</td>
                    <td>Nilai \( c \)</td>
                    <td>Grafik terbuka ke</td>
                    <td>Nilai sumbu \( y \)</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>\( f(x)=2x^2-x+3 \)</td>
                    <td><input type="number" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="number" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="number" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="number" class="form-control" placeholder="" style="width: 100px;"></td>
                    <td><input type="number" class="form-control" placeholder="" style="width: 80px;"></td>
                  </tr>
                  <tr>
                    <td>\( f(x)=-2x^2-2x+6 \)</td>
                    <td><input type="number" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="number" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="number" class="form-control" placeholder="" style="width: 50px;"></td>
                    <td><input type="number" class="form-control" placeholder="" style="width: 100px;"></td>
                    <td><input type="number" class="form-control" placeholder="" style="width: 80px;"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </li>
        
        <!-- Peran nilai b -->
        <li>
          <h5>Peran nilai \( b \) dalam fungsi kuadrat </h5>
          <p class="mt-3" style="padding: 0 10px; text-align: justify;">
            &nbsp;&nbsp;&nbsp;&nbsp;
            Nilai \( b \) disebut koefisien linier. Nilai \( b \) mempengaruhi letak sumbu simetri dan posisi puncak parabola.
            Nilai \( b \) juga menggeser puncak parabola ke kiri dan ke kanan.
            Sumbu simetri dari parabola adalah garis vertikal yang melewati titik puncak, sehingga membagi parabola menjadi dua bagian yang simetris.
            Persamaan dari sumbu simetri adalah <mark> \( x=-\frac{b}{2a} \) </mark>. Sumbu simetri selalu melalui titik puncak, x = 1.
            Titik puncak (vertex) dari sebuah parabola yang berbentuk <mark> \( y=ax^2+bx+c \) </mark> terletak di koordinat (𝑥, 𝑦) di mana:
          </p>
          <p>- Titik puncak fungsi kuadrat yaitu (𝑥𝑝 , 𝑦𝑝 ) dengan \( x_p=-\frac{b}{2a} \) dan \( y_p=-\frac{D}{4a} \) </p>
          <p>- Koordinat 𝑦 dari titik puncak dapat ditemukan dengan memasukkan nilai 𝑥 tersebut ke dalam persamaan kuadrat.</p>
        </li>
        <p> Agar lebih jelas, ayoo kita pahami contoh soal dan latihan berikut ini! </p>
        <span class="border border-primary p-2 my-2 rounded">Contoh Soal: </span>
        <p class="mt-3" style="padding: 0 30px;"> Fungsi kuadrat \( f(x)=2x^2-4x+1 \), tentukan titik puncak, sumbu simetri serta apakah titik puncak adalah maksimum atau minimum? </p>
        <span class="border border-primary p-2 my-2 rounded">Jawab: </span>
        <ol type="a" class="mt-3">
          <li>
            Menentukan titik puncak:
            <p>- Nilai 𝑎 = 2, 𝑏 = −4, dan 𝑐 = 1</p>
            <p>- Koordinat 𝑥 dari titik puncak: \( 𝑥 = \frac{-b}{2a} = \frac{-4}{2(2)} = \frac{4}{4} = \) <input type="text" placeholder="" style="width: 50px;"></p>
            <p>- Koordinat 𝑦 dari titik puncak: \( y = 2(1)^2-4(1)+1 \) = <input type="text" placeholder="" style="width: 50px;"> − <input type="text" placeholder="" style="width: 50px;"> + <input type="text" placeholder="" style="width: 50px;"> = <input type="text" placeholder="" style="width: 50px;"></p>
            <p>- Jadi, titik puncak adalah (<input type="text" placeholder="" style="width: 50px;">, <input type="text" placeholder="" style="width: 50px;">).</p>
          </li>
          <li>
            Menentukan sumbu simetri:
            <p>- Sumbu simetri adalah garis vertikal 𝑥 = 1</p>
          </li>
          <li>
            Menentukan apakah titik puncak adalah maksimum atau minimum:
            <p>- Karena 𝑎 = 2 (positif), parabola terbuka ke <input type="text" placeholder="" style="width: 50px;">, sehingga titik puncak
              (<input type="text" placeholder="" style="width: 50px;">, <input type="text" placeholder="" style="width: 50px;">) adalah titik minimum.</p>
          </li>
          <span class="border border-primary p-2 my-2 rounded">Latihan Soal: </span>
          <ol>
            <li>
              <div> 
                <div class="mt-3">
                  Fungsi kuadrat \( y=2x^2+4x+4 \), tentukan titik puncak, sumbu simetri serta apakah titik puncak adalah maksimum atau minimum?
                </div>
                <span class="border border-primary p-2 my-2 rounded">Jawab: </span>
                  <ol type="a" class="mt-3">
                    <li>
                      Menentukan titik puncak:
                      <p>- Nilai 𝑎 = <input type="text" placeholder="" style="width: 50px;">, 𝑏= <input type="text" placeholder="" style="width: 50px;"> dan 𝑐 = <input type="text" placeholder="" style="width: 50px;"></p>
                      <p>- Koordinat \( x \) dari titik puncak: \( x= \frac{-b}{2a} \)</p>
                      <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                        <span>\( x = \)</span>

                        <!-- Pecahan 1 -->
                        <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                          <input type="text" id="user_x_num_step1" placeholder="..." style="width: 40px;">
                          <hr style="margin: 0;">
                          <input type="text" id="user_x_den_step1" placeholder="..." style="width: 40px;">
                        </div>
                        <span>=</span>

                        <!-- Pecahan 2 -->
                        <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                          <input type="text" id="user_x_num_step2" placeholder="..." style="width: 40px;">
                          <hr style="margin: 0;">
                          <input type="text" id="user_x_den_step2" placeholder="..." style="width: 40px;">
                        </div>
                        <span>=</span>

                        <!-- Jawaban akhir -->
                        <input type="text" id="user_result_x" placeholder="..." style="width: 50px;">
                        <span></span>
                      </div>
                        <p>
                          - Koordinat \( y \) dari titik puncak: \( y = -x^2 + 4x - 4 = \)
                          <input type="text" style="width: 50px;"> +
                          <input type="text" style="width: 50px;"> -
                          <input type="text" style="width: 50px;"> =
                          <input type="text" style="width: 50px;"> +
                          <input type="text" style="width: 50px;"> -
                          <input type="text" style="width: 50px;"> =
                          <input type="text" style="width: 50px;">
                        </p>
                        <p>- Jadi, titik puncaknya adalah <input type="text" placeholder="" style="width: 50px;"> = (<input type="text" placeholder="" style="width: 50px;">,<input type="text" placeholder="" style="width: 50px;">)</p>
                        </li>
                        <li>
                        Menentukan sumbu simetri:
                        <p>- Sumbu simetri adalah garis vertikal 𝑥 = <input type="text" placeholder="" style="width: 50px;"></p>
                        </li>
                        <li>
                        Menentukan apakah titik puncak adalah maksimum atau minimum:
                        <p>- Karena 𝑎 = <input type="text" placeholder="" style="width: 50px;">, parabola terbuka ke <input type="text" placeholder="" style="width: 50px;">, sehingga titik puncak
                          (<input type="text" placeholder="" style="width: 50px;">, <input type="text" placeholder="" style="width: 50px;">) adalah titik <input type="text" placeholder="" style="width: 50px;"></p>
                        </li>
                    </div>
                    <li>
                    <div>
                    <div class="mt-3">
                    Fungsi kuadrat \( y=-x^2+4x-4 \), tentukan titik puncak, sumbu simetri serta apakah titik puncak adalah maksimum atau minimum?
                    </div>
                    <span class="border border-primary p-2 my-2 rounded">Penyelesaian: </span>
                    <ol type="a" class="mt-3">
                      <li>
                      Menentukan titik puncak:
                      <p>- Nilai 𝑎 = <input type="text" placeholder="" style="width: 50px;">, 𝑏= <input type="text" placeholder="" style="width: 50px;"> dan 𝑐 =<input type="text" placeholder="" style="width: 50px;"></p>
                      <p>- Koordinat \( x \) dari titik puncak: \( x= \frac{-b}{2a} \)</p>
                      <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                        <span>\( x = \)</span>

                        <!-- Pecahan 1 -->
                        <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                          <input type="text" id="user_x_num_step1" placeholder="..." style="width: 40px;">
                          <hr style="margin: 0;">
                          <input type="text" id="user_x_den_step1" placeholder="..." style="width: 40px;">
                        </div>

                        <span>=</span>

                        <!-- Pecahan 2 -->
                        <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                          <input type="text" id="user_x_num_step2" placeholder="..." style="width: 40px;">
                          <hr style="margin: 0;">
                          <input type="text" id="user_x_den_step2" placeholder="..." style="width: 40px;">
                        </div>

                        <span>=</span>

                        <!-- Jawaban akhir -->
                        <input type="text" id="user_result_x" placeholder="..." style="width: 50px;">

                        <span></span>
                      </div>

                      <p>- Koordinat 𝑦 dari titik puncak: \( y = -x^2+4x-4 \) = <input type="text" placeholder="" style="width: 50px;"> + <input type="text" placeholder="" style="width: 50px;"> - <input type="text" placeholder="" style="width: 50px;">
                      = <input type="text" placeholder="" style="width: 50px;"> + <input type="text" placeholder="" style="width: 50px;"> - <input type="text" placeholder="" style="width: 50px;">
                      = <input type="text" placeholder="" style="width: 50px;"></p>
                      <p>- Jadi, titik puncaknya adalah <input type="text" placeholder="" style="width: 50px;"> (<input type="text" placeholder="" style="width: 50px;">,<input type="text" placeholder="" style="width: 50px;">)</p>
                      </li>
                      <li>
                      Menentukan sumbu simetri:
                      <p>- Sumbu simetri adalah garis vertikal 𝑥 = <input type="text" placeholder="" style="width: 50px;"></p>
                      </li>
                      <li>
                      Menentukan apakah titik puncak adalah maksimum atau minimum:
                      <p>- Karena 𝑎 = <input type="text" placeholder="" style="width: 50px;">, parabola terbuka ke <input type="text" placeholder="" style="width: 50px;">, sehingga titik puncak
                        (<input type="text" placeholder="" style="width: 50px;">, <input type="text" placeholder="" style="width: 50px;">) adalah titik <input type="text" placeholder="" style="width: 50px;">
                      </p>
                      </li>
                    </div>
                  </li>
                </ol>
                  
        <!-- Peran nilai diskriminan -->
        <li class="my-3">
        <div class="p-3 mb-3">
          <div>
            <h5> Nilai diskriminan dalam fungsi kuadrat </h5>
            <p> Diskriminan adalah nilai <mark> \( D = b^2 - 4ac \) </mark> untuk persamaan kuadrat <mark> \( ax^2 + bx + c = 0 \). </mark>
              Diskriminan digunakan untuk menentukan jenis dan banyaknya akar persamaan kuadrat. Contohnya seperti pada gambar di bawah ini:
            </p>
            <div class="text-center">
              <img src="{{ asset('assets/img/app/karakteristik11.png') }}" 
              alt="Contoh grafik fungsi kuadrat berbentuk parabola" class="img-fluid">
            <p>Gambar Titik Potong dengan Sumbu 𝑥</p>
            </div>
            <div>
              Pada fungsi kuadrat berbentuk \( y=f(x)=ax^2+bx+c \), diskriminan diberikan oleh nilai \( D = b^2-4ac \) untuk menentukan jumlah titik potong
              dengan sumbu x.
              <br>
                𝐷 > 0 maka ada dua titik potong dengan sumbu x.
              <br>
                𝐷 = 0 maka ada satu titik potong dengan sumbu x.
              <br>
                𝐷 < 0 maka tidak ada titik potong dengan sumbu x.
            </div>
          </div>    
        </ol>
        <span class="border border-primary p-2 my-2 rounded mt-3">Contoh Soal: </span>
        <div class="my-3">
          Hitunglah nilai diskriminan dari \( f(x)=-x^2-x+2\) adalah?
        </div>
        <span class="border border-primary p-2 my-2 rounded mt-3">Penyelesaian: </span>
        <div class="mt-3">
          Hitunglah nilai diskriminan dari \( f(x)=-x^2-x+2 \) adalah?
          <ol type="a">
            <li>Menentukan nilai 𝑎, 𝑏, dan 𝑐
              <p>- Nilai 𝑎 = −1, 𝑏 = 1, dan 𝑐 = 2</p>
            </li>
            <li>Menghitung nilai diskriminan
              <p>- \(D=b^2-4ac\) = <input type="text" placeholder="" style="width: 50px;"> − <input type="text" placeholder="" style="width: 50px;"> (<input type="text" placeholder="" style="width: 50px;">)(<input type="text" placeholder="" style="width: 50px;">) = <input type="text" placeholder="" style="width: 50px;"> + <input type="text" placeholder="" style="width: 50px;"> = <input type="text" placeholder="" style="width: 50px;"></p>
              <p>- Jadi, nilai diskriminan adalah <input type="text" placeholder="" style="width: 50px;"></p>
            </li>
          </ol>
        </div>
        <span class="border border-primary p-2 my-2 rounded mt-3">Latihan Soal:</span>
        <div class="my-3">
          1. Hitunglah nilai diskriminan dari \( f(x)=3x^2-9x-12 \) adalah?
        </div>
        <span class="border border-primary p-2 my-2 rounded mt-3">Penyelesaian: </span>
        <div class="mt-3">
          <ol type="a">
            <li>Menentukan nilai 𝑎, 𝑏, dan 𝑐
              <p>- Nilai 𝑎 = <input type="text" placeholder="" style="width: 50px;">, 𝑏 = <input type="text" placeholder="" style="width: 50px;">, dan 𝑐 = <input type="text" placeholder="" style="width: 50px;"></p>
            </li>
            <li>Menghitung nilai diskriminan
              <p>- \( D=b^2-4ac \) = <input type="text" placeholder="" style="width: 50px;">-<input type="text" placeholder="" style="width: 50px;">(<input type="text" placeholder="" style="width: 50px;">)(<input type="text" placeholder="" style="width: 50px;">)=<input type="text" placeholder="" style="width: 50px;">+<input type="text" placeholder="" style="width: 50px;">=<input type="text" placeholder="" style="width: 50px;"></p>
              <p>- Jadi, nilai diskriminan adalah <input type="text" placeholder="" style="width: 50px;"></p>
            </li>
          </ol>
        </div>
        <div class="my-3">
          2. Hitunglah nilai diskriminan dari \( f(x)=2x^2-x+3 \) adalah?
        </div>
        <span class="border border-primary p-2 my-2 rounded mt-3">Penyelesaian: </span>
        <div class="mt-3">
          <ol type="a">
            <li>Menentukan nilai 𝑎, 𝑏, dan 𝑐
              <p>- Nilai 𝑎 = <input type="text" placeholder="" style="width: 50px;">, 𝑏 = <input type="text" placeholder="" style="width: 50px;">, dan 𝑐 = <input type="text" placeholder="" style="width: 50px;"></p>
            </li>
            <li>Menghitung nilai diskriminan
              <p>- \( D=b^2-4ac \) = <input type="text" placeholder="" style="width: 50px;">-<input type="text" placeholder="" style="width: 50px;">(<input type="text" placeholder="" style="width: 50px;">)(<input type="text" placeholder="" style="width: 50px;">)=<input type="text" placeholder="" style="width: 50px;">-<input type="text" placeholder="" style="width: 50px;">=<input type="text" placeholder="" style="width: 50px;"></p>
              <p>- Jadi, nilai diskriminan adalah <input type="text" placeholder="" style="width: 50px;"></p>
            </li>
          </ol>
        </div>
                  
        <!-- Membuat grafik -->
        <div class="">
          <img src="{{ asset('assets/img/app/ayomembaca.png') }}" 
          alt="Contoh grafik fungsi kuadrat berbentuk parabola" 
          class="img-fluid">
        </div>
        <ol>
  <li class="mt-3">
    Buatlah Grafik fungsi 𝑓 (𝑥 ) = 𝑥 2 + 1 dengan cara berikut:
    <ol type="a">
      <li>
        Melengkapi Table
        <div style="display: flex; gap: 24px; align-items: flex-start; flex-wrap: wrap;">
          <!-- Kiri: TABEL -->
          <div style="flex:1; min-width:250px;">
            <div class="table-responsive">
              <table class="table table-bordered table-hover text-center">
                  <thead class="bg-info text-white">
                      <tr>
                          <th colspan="2">𝑓(𝑥) = 𝑥² + 1</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>x</td>
                          <td>Y</td>
                      </tr>
                      <tr>
                          <td>-2</td>
                          <td>5</td>
                      </tr>
                      <tr>
                          <td>-1</td>
                          <td>2</td>
                      </tr>
                      <tr>
                          <td>0</td>
                          <td>1</td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>2</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>5</td>
                      </tr>
                  </tbody>
              </table>
            </div>
          </div>
          <!-- Kanan: GeoGebra -->
          <div style="flex:1; min-width:250px;">
            <iframe 
                src="https://www.geogebra.org/calculator/tmpyggsm" 
                style="width: 100%; height: 380px; border:0; display: block;"
                allowfullscreen
                allow="geogebra">
            </iframe>
            <p class="text-center">Plot Titik Grafik dan hubungkan titik</p>
          </div>
        </div>
      </li>
      <li>
        Plot setiap titik pada tabel ke dalam sistem koordinat. Koordinat titik
        yang didapatkan dari tabel adalah (-2,5), (-1,2), (0,0), (1,2), dan (2,5). Kemudian hubungkan titik sehingga didapatkan grafik fungsinya.
      </li>
    </ol>
  </li>
  <li class="mt-3">
  Buatlah grafik \( f(x)=-2x^2-2x+6 \)
  <ol type="a">
    <li>
      Melengkapi table
      <!-- Mulai pembungkus Flexbox -->
      <div style="display: flex; gap: 24px; align-items: flex-start; flex-wrap: wrap;">
        <!-- Kolom kiri: TABEL -->
        <div style="flex:1; min-width:250px;">
          <div class="text-center">
            <style>
              input[type=number]::-webkit-inner-spin-button,
              input[type=number]::-webkit-outer-spin-button {
                  -webkit-appearance: none;
                  margin: 0;
              }
              input[type=number] {
                  -moz-appearance: textfield;
              }
            </style>
            <table class="table table-bordered table-hover text-center">
              <thead class="bg-info text-white">
                <tr>
                  <td colspan="2">\( f(x)=-2x^2-2x+6 \)</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><b>x</b></td>
                  <td><b>Y</b></td>
                </tr>
                <tr>
                  <td>-2</td>
                  <td><input type="number" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>-1</td>
                  <td><input type="number" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>0</td>
                  <td><input type="number" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><input type="number" class="form-control" placeholder=""></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><input type="number" class="form-control" placeholder=""></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Kolom kanan: GeoGebra -->
        <div style="flex:1; min-width:250px;">
          <iframe 
            src="https://www.geogebra.org/calculator" 
            style="width: 100%; height: 380px; border:0; display: block;"
            allowfullscreen
            allow="geogebra">
          </iframe>
          <p class="text-center">GeoGebra Grafik</p>
        </div>
      </div>
      <!-- Akhir pembungkus Flexbox -->
    </li>
    <li>
      Plot setiap titik dan pada tabel ke dalam sistem koordinat dan hubungkan grafiknya
      Koordinat titik yang didapatkan dari tabel adalah 
      <input type="text" class="form-control d-inline-block" style="width: 50px;" placeholder="x1">, 
      <input type="text" class="form-control d-inline-block" style="width: 50px;" placeholder="x2">, 
      <input type="text" class="form-control d-inline-block" style="width: 50px;" placeholder="x3">, 
      <input type="text" class="form-control d-inline-block" style="width: 50px;" placeholder="x4">, 
      <input type="text" class="form-control d-inline-block" style="width: 50px;" placeholder="x5">.
    </li>
  </ol>