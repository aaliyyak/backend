<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\Auth\AdminLoginController;

// Route halaman utama diarahkan ke form login admin
Route::get('/', function () {
    return redirect()->route('admin.login');
});

// Route untuk login admin
Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Hanya admin yang bisa akses route berikut
Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/fasilitas', FasilitasController::class);
    Route::resource('/dosen', DosenController::class);
    Route::resource('/kaprodi', KaprodiController::class);
});
