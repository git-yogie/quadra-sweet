<div style="padding: 30px 30px 0 30px;" class="mb-5">
    <span class="border border-primary p-2 rounded">Latihan Soal: </span>
    <form id="latihanForm" onsubmit="return false;">
    <ol type="1">
        <li class="mt-3">
            Perhatikan gambar di bawah ini. Skatepark yang digunakan untuk bermain skateboard berbentuk lintasan parabola.
            <div class="text-center">
                <img src="{{ asset('assets/img/app/karakteristik5.png') }}" alt="Contoh grafik fungsi kuadrat berbentuk parabola" class="img-fluid">
                <p style="text-align: center">Gambar 6. Skateboard Yang Berbentuk Lintasan Parabola (Sumber: Canva.com)</p>
            </div>
            <p>
                Berdasarkan gambar di atas, grafik terbuka ke 
                <input type="text" id="fungsi_terbuka1" name="fungsi_terbuka1" class="form-control d-inline w-auto" style="width: 80px !important;"> 
                jika anak tersebut meluncurkan skateboard, maka nilai \( a \) adalah
                <input type="text" id="nilai1" name="nilai1" class="form-control d-inline w-auto" style="width: 80px !important;">.
            </p>
        </li>
        <li class="mt-3">
            Perhatikan gambar di bawah ini. Ketika tali diayunkan ke atas maka membentuk parabola fungsi kuadrat.
            <div class="text-center">
                <img src="{{ asset('assets/img/app/karakteristik6.png') }}" alt="Contoh grafik fungsi kuadrat berbentuk parabola" class="img-fluid">
                <p style="text-align: center">Gambar 7. Tali Yang Diayunkan Membentuk Parabola (Sumber: Canva.com)</p>
            </div>
            <p>
                Berdasarkan gambar di atas, grafik terbuka ke 
                <input type="text" id="fungsi_terbuka2" name="fungsi_terbuka2" class="form-control d-inline w-auto" style="width: 80px !important;"> 
                jika tali diayunkan ke bawah, maka nilai \( a \) adalah
                <input type="text" id="nilai2" name="nilai2" class="form-control d-inline w-auto" style="width: 80px !important;">.
            </p>
        </li>
      </form>
  </div>
</div>