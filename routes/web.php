<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
// use App\Http\Controllers\KompetensiController;


// Rute ini akan menangani URL seperti:
// /karakteristik/a, /karakteristik/b, dll.
// Perhatikan nama rute-nya adalah 'karakteristik.show'
Route::get('/karakteristik/{page}', [MateriController::class, 'show'])->name('karakteristik.show');

// Rute-rute autentikasi dan halaman utama
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/sign-in', [AuthController::class, 'signIn'])->name('auth.sign-in');
Route::post('/sign-up', [AuthController::class, 'signUp'])->name('auth.sign-up');
Route::post('/sign-out', [AuthController::class, 'signOut'])->name('auth.sign-out');
// Route::get('/indikator-capaian', [KompetensiController::class, 'indikator'])->name('indikator');

// Tambahkan Rute Informasi & Kompetensi di sini
Route::get('/profil', function () {
    return view('informasi.profil');
})->name('profil');

Route::get('/petunjuk', function () {
    return view('informasi.petunjuk');
})->name('petunjuk');

Route::get('/indikator', function () {
    return view('kompetensi.indikator');
})->name('indikator');

// Rute-rute yang memerlukan autentikasi
Route::middleware(['auth', 'check.progress'])->group(function() {
    Route::get('/peta', function () {
        return view('layouts/peta');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('/dashboard')->group(function () {
        
        Route::get('/rekonstruksi', [DashboardController::class, 'rekonstruksi'])->name('dashboard.rekonstruksi');
        Route::get('/masalah', [DashboardController::class, 'masalah'])->name('dashboard.masalah');
        Route::get('/evaluasi', [QuizController::class, 'evaluasiView'])->name('dashboard.evaluasi');
        Route::get('/evaluasi/result', [DashboardController::class, 'evaluasi'])->name('dashboard.evaluasi.result');
        Route::post('/evaluasi/result', [DashboardController::class, 'resultEval'])->name('dashboard.evaluasi.result.post');
        Route::get('/quiz/{quizKey}', [QuizController::class, 'show'])->name('quiz.show');
        Route::post('/quiz/{quizKey}/result', [QuizController::class, 'result'])->name('quiz.result');
        Route::get('/karakteristik', [DashboardController::class, 'karakteristik'])->name('dashboard.karakteristik');
        Route::get('/karakteristik2', [DashboardController::class, 'karakteristik2'])->name('dashboard.karakteristik2');
    });

    // Rute '/karakteristik' yang lain bisa Anda biarkan jika memang dibutuhkan,
    // atau dihapus jika tidak lagi relevan.
    Route::get('/karakteristik', function () {
        return view('layouts/karakteristik');
    });

    // Rute-rute profil pengguna
    Route::get('/account', [ProfileController::class, 'account'])->name('profile.account');
    Route::post('/account', [ProfileController::class, 'accountUpdate'])->name('profile.account-update');
    Route::delete('/account', [ProfileController::class, 'accountDestroy'])->name('profile.account-destroy');
    Route::get('/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');
    Route::post('/change-password', [ProfileController::class, 'changePasswordUpdate'])->name('profile.change-password-update');

    // Rute-rute khusus untuk role 'teacher'
    Route::middleware(['role:teacher'])->group(function() {
        // TAMBAHKAN 2 BARIS KODE BARU INI DI SINI:
        Route::get('/students/export/excel', [StudentController::class, 'exportExcel'])->name('students.export.excel');
        Route::get('/students/export/pdf', [StudentController::class, 'exportPdf'])->name('students.export.pdf');

        // Kode bawaan asli Anda tetap biarkan berada di bawahnya:
        Route::get('/students', [StudentController::class, 'index'])->name('students.index');
        Route::patch('/students/{nis}/reset-password', [StudentController::class, 'resetPassword'])->name('students.reset-password');
        Route::delete('/students/{nis}', [StudentController::class, 'destroy'])->name('students.destroy');
    });

    // Rute untuk evaluasi kuis
    Route::post('/evaluasi-jawaban', [QuizController::class, 'evaluasi'])->name('quiz.evaluate');

});
