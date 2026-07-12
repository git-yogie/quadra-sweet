@extends('layouts.dashboard')

<style>
    /* 1. Hilangkan elemen sidebar pembungkus utama template Sneat */
    .layout-menu, #layout-menu {
        display: none !important;
    }

    /* 2. Geser area konten utama ke kiri luar agar memenuhi layar */
    .layout-page {
        padding-left: 0 !important;
    }

    /* 3. Maksimalkan container utama jika diperlukan */
    .content-wrapper {
        width: 100% !important;
    }
</style>

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center">

                    @if(auth()->check())
                        <a href="{{ route('dashboard') }}"
                        class="btn btn-primary rounded-pill me-3">
                            <i class="bx bx-arrow-back"></i>
                        </a>
                    @else
                        <a href="{{ route('welcome') }}"
                        class="btn btn-primary rounded-pill me-3">
                            <i class="bx bx-arrow-back"></i>
                        </a>
                    @endif

                    <h5 class="mb-0">Capaian Pembelajaran (CP)</h5>

                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <div class="p-3 mb-4" style="background-color: #696cff; border-radius: 8px;">
                        <h4 class="text-white text-center mb-0 fw-bold">Capaian Pembelajaran Fase E</h4>
                    </div>

                    <div class="px-2">
                        <p style="text-align: justify; line-height: 1.8; font-size: 1.05rem;">
                            Berdasarkan Keputusan Kepala BSKAP Kemendikbudristek, capaian pembelajaran untuk mata pelajaran Matematika di tingkat SMA/MA Kelas X (Fase E) dirancang untuk membekali peserta didik dengan kemampuan berpikir kritis dan logis.
                        </p>

                        <div class="alert alert-outline-primary" role="alert">
                            <p class="mb-0" style="text-align: justify; line-height: 1.8;">
                                <strong>Uraian Capaian:</strong><br>
                                Di akhir Fase E, peserta didik memiliki kemampuan untuk memahami dan menyelesaikan masalah yang berkaitan dengan sistem persamaan linear tiga variabel serta sistem pertidaksamaan linear dua variabel. 
                                Selain itu, peserta didik diharapkan mampu menerapkan konsep-konsep matematika yang lebih kompleks dalam kehidupan sehari-hari, khususnya dalam <strong>menyelesaikan masalah yang berkaitan dengan persamaan dan fungsi kuadrat</strong> (termasuk konsep akar imajiner), serta mampu mengoperasikan persamaan eksponensial (baik yang berbasis sama maupun fungsi eksponensial secara umum).
                            </p>
                        </div>

                        <p class="mt-4" style="text-align: justify; line-height: 1.8;">
                            Melalui media pembelajaran <strong>BelajarKuadrat</strong> ini, fokus utama pencapaian diarahkan pada materi Fungsi Kuadrat. Peserta didik diharapkan tidak hanya sekadar menghitung, namun juga mampu:
                        </p>
                        
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-start">
                                <i class="bx bx-check-circle text-success me-2 mt-1"></i>
                                <span>Menganalisis karakteristik grafik fungsi kuadrat berdasarkan koefisien dan diskriminannya.</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <i class="bx bx-check-circle text-success me-2 mt-1"></i>
                                <span>Merekonstruksi fungsi kuadrat dari berbagai informasi yang diketahui (titik puncak, titik potong, atau titik sembarang).</span>
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <i class="bx bx-check-circle text-success me-2 mt-1"></i>
                                <span>Memodelkan dan menyelesaikan masalah nyata yang berbentuk fungsi kuadrat dengan bantuan visualisasi GeoGebra.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <h5 class="card-header">Alur Tujuan Pembelajaran (ATP)</h5>
                <hr class="my-0" />
                <div class="card-body">
                    
                    <div class="p-3 mb-4" style="background-color: #696cff; border-radius: 8px;">
                        <h4 class="text-white text-center mb-0 fw-bold">Tujuan Pembelajaran</h4>
                    </div>

                    <div class="px-2">
                        <p style="text-align: justify; line-height: 1.8;">
                            Tujuan pembelajaran pada media <strong>BelajarKuadrat</strong> disusun secara sistematis menggunakan metode tutorial untuk memastikan peserta didik dapat menguasai konsep fungsi kuadrat secara mendalam dan mandiri. Berikut adalah alur tujuan pembelajaran yang diharapkan:
                        </p>

                        <div class="mt-4">
                            <div class="d-flex mb-4">
                                <div class="me-3">
                                    <span class="badge bg-label-primary p-2" style="font-size: 1.2rem; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">1</span>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Menganalisis Karakteristik</h6>
                                    <p class="mb-0 text-muted" style="text-align: justify;">Peserta didik mampu menentukan dan menganalisis karakteristik fungsi kuadrat, termasuk titik puncak, sumbu simetri, serta arah pembukaan grafik berdasarkan nilai koefisiennya.</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="me-3">
                                    <span class="badge bg-label-primary p-2" style="font-size: 1.2rem; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">2</span>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Konstruksi dan Transformasi</h6>
                                    <p class="mb-0 text-muted" style="text-align: justify;">Peserta didik mampu mengkonstruksi atau membentuk persamaan fungsi kuadrat dari data yang tersedia dan terampil mengubah bentuk persamaan dari satu model ke bentuk model lainnya secara akurat.</p>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="me-3">
                                    <span class="badge bg-label-primary p-2" style="font-size: 1.2rem; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">3</span>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">Penyelesaian Masalah Kontekstual</h6>
                                    <p class="mb-0 text-muted" style="text-align: justify;">Peserta didik mampu mengaplikasikan konsep fungsi kuadrat untuk menyelesaikan berbagai masalah nyata (kontekstual) melalui pemodelan matematika yang tepat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection