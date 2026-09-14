<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\KontakController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfileController::class, 'index'])->name('profil');

Route::get('/program', [ProgramController::class, 'index'])->name('program.index');
Route::get('/program/{program}', [ProgramController::class, 'show'])->name('program.show');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
Route::get('/kegiatan/{kegiatan}', [KegiatanController::class, 'show'])->name('kegiatan.show');

Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik');
Route::get('/organisasi', [OrganisasiController::class, 'index'])->name('organisasi');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// General / Admin / Kader Login Aliases
Route::get('/login', [\App\Http\Controllers\KaderAuthController::class, 'showLoginForm'])->name('login');
Route::get('/admin/login', [\App\Http\Controllers\KaderAuthController::class, 'showLoginForm']);

// ==========================================
// KADER AUTH & REGISTRATION
// ==========================================
Route::prefix('kader')->name('kader.')->group(function () {
    Route::get('login', [\App\Http\Controllers\KaderAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [\App\Http\Controllers\KaderAuthController::class, 'login'])->name('login.post');
    Route::post('logout', [\App\Http\Controllers\KaderAuthController::class, 'logout'])->name('logout');

    Route::prefix('register')->name('register.')->controller(\App\Http\Controllers\KaderRegistrationController::class)->group(function () {
        Route::get('step-1', 'showStep1')->name('step1');
        Route::post('step-1', 'storeStep1')->name('step1.post');
        Route::get('step-2', 'showStep2')->name('step2');
        Route::post('step-2', 'storeStep2')->name('step2.post');
        Route::get('step-3', 'showStep3')->name('step3');
        Route::post('step-3', 'storeStep3')->name('step3.post');
        Route::get('step-4', 'showStep4')->name('step4');
        Route::post('step-4', 'storeStep4')->name('step4.post');
        Route::get('step-5', 'showStep5')->name('step5');
        Route::post('step-5', 'storeStep5')->name('step5.post');
        Route::get('step-6', 'showStep6')->name('step6');
        Route::post('submit', 'submit')->name('submit');
        Route::get('success', 'success')->name('success');
    });

    // KADER DASHBOARD (Protected)
    Route::middleware(['auth', 'role:kader'])->group(function () {
        Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        
        // Data Keluarga
        Route::resource('family', \App\Http\Controllers\FamilyController::class);
        Route::resource('family.member', \App\Http\Controllers\FamilyMemberController::class)->except(['index']);
        
        // Data Individu
        Route::resource('individual', \App\Http\Controllers\IndividualController::class);
        
        // Klasifikasi Program
        Route::get('individual/{individual}/classification', [\App\Http\Controllers\ClassificationController::class, 'create'])->name('classification.create');
        Route::post('individual/{individual}/classification', [\App\Http\Controllers\ClassificationController::class, 'store'])->name('classification.store');
        
        // Program Spesifik
        Route::resource('pus', \App\Http\Controllers\PusController::class)->only(['show', 'edit', 'update']);
        Route::resource('kb', \App\Http\Controllers\KbController::class)->only(['show', 'edit', 'update']);
        Route::resource('bumil', \App\Http\Controllers\BumilController::class)->only(['show', 'edit', 'update']);
        Route::resource('baduta', \App\Http\Controllers\BadutaController::class)->only(['show', 'edit', 'update']);
        Route::resource('bulin', \App\Http\Controllers\BulinController::class)->only(['show', 'edit', 'update']);
        Route::resource('catin', \App\Http\Controllers\CatinController::class)->only(['show', 'edit', 'update']);
        
        // Pemeriksaan
        Route::resource('bumil.examination', \App\Http\Controllers\PregnancyExaminationController::class)->only(['create', 'store', 'show']);
    });
});

// ==========================================
// ADMIN DASHBOARD
// ==========================================
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('verification', [\App\Http\Controllers\Admin\VerificationController::class, 'index'])->name('verification.index');
    Route::post('verification/{kader}/approve', [\App\Http\Controllers\Admin\VerificationController::class, 'approve'])->name('verification.approve');
    Route::post('verification/{kader}/reject', [\App\Http\Controllers\Admin\VerificationController::class, 'reject'])->name('verification.reject');
});
