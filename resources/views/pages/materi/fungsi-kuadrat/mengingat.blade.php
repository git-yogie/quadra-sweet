<!-- Pengantar -->
<p>
  Sebelum memulai pembelajaran <strong>"Ayo ingat kembali"</strong> materi persamaan kuadrat. 
  Persamaan kuadrat dengan rumus \( ax^2 + bx + c = 0 \) dapat diselesaikan dengan berbagai cara antara lain dengan:
  <strong>Faktorisasi</strong>, <strong>Kuadrat Sempurna</strong>, dan <strong>Rumus ABC</strong>.
</p>

<!-- Tabs -->
<ul class="nav nav-tabs" id="kuadratTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active fw-bold" id="faktorisasi-tab" data-bs-toggle="tab" data-bs-target="#faktorisasi" type="button" role="tab">
      1. Faktorisasi
    </button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link fw-bold" id="kuadrat-tab" data-bs-toggle="tab" data-bs-target="#kuadrat" type="button" role="tab">
      2. Kuadrat Sempurna
    </button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link fw-bold" id="abc-tab" data-bs-toggle="tab" data-bs-target="#abc" type="button" role="tab">
      3. Rumus ABC
    </button>
  </li>
</ul>

<!-- Tab Content -->
<div class="tab-content p-3 border border-top-0 rounded-bottom" id="kuadratTabContent">
  
  <!-- Faktorisasi -->
  <div class="tab-pane fade show active" id="faktorisasi" role="tabpanel">
    <div class="p-3 rounded" style="border: 2px solid skyblue; background: #f0faff;">
      <p>Merupakan cara mencari penyelesaian dari persamaan kuadrat dengan mencari nilai yang jika dikalikan, maka akan menghasilkan nilai lain. Contoh:</p>
      <p>$$ f(x)=x^2-5x+6 $$</p>
      <p>$$ 0=x^2-5x+6 $$</p> 
      <p>$$ x^2-5x+6=0 $$</p> 
      <p>$$ (x-2)(x-3)=0 $$</p>
      <p><span class="badge bg-success">Akar-akar dari persamaan adalah</span> \( x = 2 \) atau \( x = 3 \)</p>
    </div>
  </div>

  <!-- Kuadrat Sempurna -->
  <div class="tab-pane fade" id="kuadrat" role="tabpanel">
    <div class="p-3 rounded" style="border: 2px solid skyblue; background: #f9f9ff;">
      <p>Merupakan cara untuk menyelesaikan persamaan kuadrat dengan melengkapkan kuadratnya sehingga menjadi sempurna. Rumus:</p>
      <p>$$ (x+p)^2=q $$</p> 
      <p>$$ x+p= \pm \sqrt{q} $$</p> 
      <p>$$ x=-p \pm \sqrt{q} $$</p> 
      <p>Contoh:</p> <p>\( x^2+6x+5=0 \)</p> 
      <p>Ubah menjadi \( x^2+6x=-5 \)</p> 
      <p>Tambahkan satu angka di ruas kiri dan kanan agar menjadi kuadrat sempurna. Penambahan angka ini diambil dari separuh angka koefisien dari \( x \) atau separuhnya 6 yang dikuadratkan yakni \( 3^2=9 \). Jadi:</p> 
      <p>\( x^2+6x+9=-5+9 \)</p> 
      <p>\( x^2+6x+9=4 \)</p> 
      <p>\( (x+3)^2=4 \)</p> 
      <p>\( (x+3)^2=\sqrt{4} \)</p>
      <p>\( x+3=\pm \sqrt{4} \)</p>  
      <p>\( x+3=\pm 2 \)</p> 
      <P>Kemudian, untuk \( x+3=2 \), maka: \( x=2-3=-1 \)</p> 
      <p>Untuk \( x+3=-2 \), maka: \( x=-2-3=-5 \)</p>
      <p><span class="badge bg-primary">Akar-akar dari persamaan adalah</span> \( x=-1 \) atau \( x=-5 \)</p>
    </div>
  </div>

  <!-- Rumus ABC -->
  <div class="tab-pane fade" id="abc" role="tabpanel">
    <div class="p-3 rounded" style="border: 2px solid skyblue; background: #fef9f9;">
      <p>Menggunakan rumus kuadrat atau biasa dikenal dengan rumus abc:</p>
      <p>Contoh:</p>
      <p>\( x^2+4x-12=0 \)</p>
      <p>\( a=1, b=4, c=-12 \)</p>
      <p>\( x_{1,2} = \frac{-b \pm \sqrt{b^2 - 4ac}}{2a} \)</p> 
      <p>\( x= \frac{-4 \pm \sqrt{4^2 - 4.1(-12)}}{2.1} \)</p> 
      <p>\( x= \frac{-4 \pm \sqrt{16 + 48}}{2.1} \)</p> 
      <p>\( x= \frac{-4 \pm \sqrt{64}}{2} \)</p> 
      <p>\( x= \frac{-4 \pm 8}{2} \)</p> 
      <p>\( x_{1}= \frac{-4 + 8}{2} = 2 \) atau \( x_{2}= \frac{-4 - 8}{2} = -6 \) </p>
      <p><span class="badge bg-primary">Akar-akar dari persamaan adalah</span> \( x=2 \) atau \( x=-6 \)</p>
    </div>
  </div>
</div>

</div> <!-- tutup accordion -->

<!-- Kotak Ayo Lanjut -->
<div class="text-center my-4">
  <div class="p-4 rounded shadow-sm" style="border: 2px solid #6c63ff; background: #f9f9ff;">
    <a href="{{ route('dashboard.karakteristik') }}">

      <button  id="goKarakteristik" class="btn btn-primary px-4">
        Mau Belajar Apa Kita Hari Ini?
      </button>
    </a>
  </div>
</div>

<script>
  document.getElementById("goKarakteristik").addEventListener("click", function () {
    // Kalau sidebar pakai tab (bukan pindah halaman)
    document.querySelector('[data-bs-target="#karakteristik"]').click();
  });
</script>
