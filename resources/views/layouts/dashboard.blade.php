@extends('layouts.app')

@section('body')
@php
    $menus = $menus ?? [];
    $progress = $progress ?? null;
    $isQuiz = request()->routeIs('quiz.show');
@endphp

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container h-100">
        @if(!$isQuiz)
            @include('components.sidebar', ['menus' => $menus, 'progress' => $progress])
        @endif
        
        <div class="layout-page h-100" style="{{ $isQuiz ? 'padding-left: 0 !important; margin-left: 0 !important; width: 100% !important;' : '' }}">
            <div class="" style="height: 20px;">
                <div class="progress-bar bg-primary" role=\"progressbar\" 
                    style="width: {{ $progress ? ($progress->progress / 4) * 100 : 0 }}%;" 
                    aria-valuenow="{{ $progress ? ($progress->progress / 4) * 100 : 0 }}" 
                    aria-valuemin="0" 
                    aria-valuemax="100">
                    {{ $progress ? ($progress->progress / 4) * 100 : 0 }}%
                </div>
            </div>

            @include('components.navbar')
            
            <div class="content-wrapper d-flex flex-column h-100">
                <div class="{{ $isQuiz ? 'quiz-container mx-auto w-100' : 'container-xxl' }} flex-grow-1 container-p-y" style="{{ $isQuiz ? 'max-width: 850px;' : '' }}">
                    @yield('content')
                </div>
                @include('components.footer')
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
</div>
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    function confirmSubmit(e, form) {
        e.preventDefault();
        Swal.fire({
            title: 'Perhatian',
            text: 'Apakah Anda yakin?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Iya, saya yakin!',
            cancelButtonText: 'Batalkan'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });

        return false;
    }
</script>

@session('notification')
<script>
    Toast.fire({
        icon: "{{ $value['icon'] }}",
        title: "{{ $value['title'] }}",
        text: "{{ $value['message'] }}",
    });
</script>
@endsession

<script>
    // Memastikan tombol keluar dibaca dengan benar saat diklik
    if (document.getElementById('logout-menu-button-on-nav')) {
        document.getElementById('logout-menu-button-on-nav').addEventListener('click', function(e) {
            e.preventDefault(); // Menghentikan link normal href="#"
            
            // Memicu form tersembunyi #logout-menu-form-on-nav untuk mengirim POST request logout
            document.getElementById('logout-menu-form-on-nav').submit();
        });
    }
</script>
@endpush