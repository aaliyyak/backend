<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KaprodiController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/fasilitas', FasilitasController::class);
Route::resource('/dosen', DosenController::class);
Route::resource('/kaprodi', KaprodiController::class);
