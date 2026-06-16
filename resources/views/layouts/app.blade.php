<!DOCTYPE html>
<html
    lang="id"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="/assets/"
    data-template="vertical-menu-template-free"
>
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />
        <link rel="icon" type="image/png" href="{{ asset('fk.PNG') }}?v=1.1">

        <title>@yield('title', 'Quadra Learn')</title>

        <meta
            name="description"
            content="Media Pembelajaran Interaktif Berbasis Web pada Materi Fungsi Kuadrat Kelas X dengan Metode Tutorial"
        />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

        <link rel="stylesheet" class="template-customizer-core-css" href="{{ asset('assets/vendor/css/core.css') }}" />
        <link rel="stylesheet" class="template-customizer-theme-css" href="{{ asset('assets/vendor/css/theme-default.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

        @stack('style')

        <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
        <script src="{{ asset('assets/js/config.js') }}"></script>

        <style>
        /* CSS Khusus Mode Kuis Menghilangkan Jejak Ruang Sidebar */
        .quiz-mode .layout-page {
            padding-left: 0 !important;
            margin-left: 0 !important;
            width: 100% !important;
        }

        .quiz-container {
            max-width: 850px !important;
            margin-left: auto !important;
            margin-right: auto !important;
            float: none !important;
        }

        .quiz-mode {
            background: #f5f7fb;
        }
        </style>
    </head>

    <body class="{{ request()->routeIs('quiz.show') ? 'quiz-mode' : '' }}">
        @yield('body')
        <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

        <script src="{{ asset('assets/js/main.js') }}"></script>
        @stack('script')
    </body>
</html>