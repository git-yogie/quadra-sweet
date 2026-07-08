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

                    <h5 class="mb-0">Petunjuk Penggunaan Aplikasi</h5>

                </div>
                <hr class="my-0" />
                <div class="card-body">
                    
                    <div class="p-3 mb-4" style="background-color: #696cff; border-radius: 8px;">
                        <h4 class="text-white text-center mb-0 fw-bold">Langkah-Langkah Penggunaan QuadraLearn</h4>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <div class="d-flex align-items-start">
                                <div class="badge bg-primary rounded p-2 me-3">1</div>
                                <div class="w-100">
                                    <h6 class="fw-bold mb-1">Halaman Depan & Akses Akun</h6>
                                    <p class="text-muted mb-3">Halaman awal terdiri dari menu login. Jika belum memiliki akun, silakan klik tombol daftar untuk membuat akun baru.</p>
                                    
                                    <div class="row g-3 text-center">
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets/img/app/landing.png') }}" class="img-fluid rounded shadow-sm border" alt="Landing Page">
                                            <p class="small text-muted mt-2">Tampilan Halaman Depan</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets/img/app/register.png') }}" class="img-fluid rounded shadow-sm border" alt="Halaman Daftar">
                                            <p class="small text-muted mt-2">Tampilan Form Daftar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-5">
                            <div class="d-flex align-items-start">
                                <div class="badge bg-primary rounded p-2 me-3">2</div>
                                <div class="w-100">
                                    <h6 class="fw-bold mb-1">Menu Utama Dashboard</h6>
                                    <p class="text-muted mb-3">Setelah login, Anda masuk ke Dashboard yang berisi menu Kompetensi, Informasi, dan Akun.</p>
                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/app/dashboard.png') }}" class="img-fluid rounded shadow-sm border" style="max-width: 70%;" alt="Dashboard">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-5">
                            <div class="d-flex align-items-start">
                                <div class="badge bg-primary rounded p-2 me-3">3</div>
                                <div class="w-100">
                                    <h6 class="fw-bold mb-1">Pendahuluan Fungsi Kuadrat</h6>
                                    <p class="text-muted mb-3">Berisi CP, TP, Peta Konsep, Apersepsi, dan menu Ayo Mengingat Kembali.</p>
                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/app/awal.png') }}" class="img-fluid rounded shadow-sm border" style="max-width: 70%;" alt="Pendahuluan">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-5">
                            <div class="d-flex align-items-start">
                                <div class="badge bg-primary rounded p-2 me-3">4</div>
                                <div class="w-100">
                                    <h6 class="fw-bold mb-1">Materi & Latihan</h6>
                                    <p class="text-muted mb-3">Terdapat 3 sub-bab materi. Setiap materi dilengkapi dengan contoh soal, latihan, dan kuis interaktif.</p>
                                    <div class="row g-3 text-center">
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets/img/app/materi.png') }}" class="img-fluid rounded shadow-sm border" alt="Materi">
                                            <p class="small text-muted mt-2">Penjelasan Materi</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets/img/app/kuis.png') }}" class="img-fluid rounded shadow-sm border" alt="Kuis">
                                            <p class="small text-muted mt-2">Latihan/Kuis Interaktif</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-start">
                                <div class="badge bg-primary rounded p-2 me-3">5</div>
                                <div class="w-100">
                                    <h6 class="fw-bold mb-1">Evaluasi Akhir</h6>
                                    <p class="text-muted mb-3">Mengerjakan soal evaluasi untuk menguji pemahaman akhir Anda.</p>
                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/app/evaluasi.png') }}" class="img-fluid rounded shadow-sm border" style="max-width: 70%;" alt="Evaluasi">
                                    </div>
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