<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuizQuestionController;
use App\Http\Controllers\StudentActivityController;
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
        Route::post('/evaluasi/result', [DashboardController::class, 'resultEval'])->name('dashboard.evaluasi.result.first');
        Route::get('/quiz/{quizKey}', [QuizController::class, 'show'])->name('quiz.show');
        Route::post('/quiz/{quizKey}/result', [QuizController::class, 'result'])->name('quiz.result');
        Route::post('/quiz/{quizKey}/reset', [QuizController::class, 'reset'])->name('quiz.reset');
        Route::get('/karakteristik', [DashboardController::class, 'karakteristik'])->name('dashboard.karakteristik');
        //Route::get('/karakteristik2', [DashboardController::class, 'karakteristik2'])->name('dashboard.karakteristik2');
    });

    Route::post('/student-activity', [StudentActivityController::class, 'store'])->name('student.activity.store');
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

        Route::get('/kkm', [SettingController::class, 'index'])->name('kkm.index');
        Route::patch('/kkm', [SettingController::class, 'update'])->name('kkm.update');

        Route::get('/bank-soal', [QuizQuestionController::class, 'index'])->name('bank-soal.index');
        Route::get('/bank-soal/create', [QuizQuestionController::class, 'create'])->name('bank-soal.create');
        Route::post('/bank-soal', [QuizQuestionController::class, 'store'])->name('bank-soal.store');
        Route::get('/bank-soal/{question}/edit', [QuizQuestionController::class, 'edit'])->name('bank-soal.edit');
        Route::put('/bank-soal/{question}', [QuizQuestionController::class, 'update'])->name('bank-soal.update');
        Route::delete('/bank-soal/{question}', [QuizQuestionController::class, 'destroy'])->name('bank-soal.destroy');

        // Kode bawaan asli Anda tetap biarkan berada di bawahnya:
        Route::get('/students', [StudentController::class, 'index'])->name('students.index');
        Route::patch('/students/{nis}/reset-password', [StudentController::class, 'resetPassword'])->name('students.reset-password');
        Route::delete('/students/{nis}/reset-quiz', [StudentController::class, 'resetQuiz'])->name('students.reset-quiz');
        Route::patch('/students/{nis}/update-class', [StudentController::class, 'updateClass'])->name('students.update-class');
        Route::delete('/students/{nis}', [StudentController::class, 'destroy'])->name('students.destroy');
        
    });

    // Rute untuk evaluasi kuis
    Route::post('/evaluasi-jawaban', [QuizController::class, 'evaluasi'])->name('quiz.evaluate');

    // Route 1: Untuk memuat halaman karakteristik materi (sekaligus membawa jawaban lama)
    Route::get('/materi/karakteristik', [QuizController::class, 'showKarakteristik'])->name('quiz.karakteristik');
    Route::get('/materi/rekonstruksi', [QuizController::class, 'showRekonstruksi'])->name('quiz.rekonstruksi');
    Route::get('/materi/masalah', [QuizController::class, 'showMasalah'])->name('quiz.masalah');
    
    // Route 2: Route khusus AJAX untuk menyimpan jawaban per bagian secara background
    Route::post('/quiz/evaluate', [QuizController::class, 'evaluate'])->name('quiz.evaluasi');

});
