<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Auth\PegawaiLoginController;
use App\Http\Controllers\IzinKeluarController;
use App\Http\Controllers\TugasTambahanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [PegawaiLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PegawaiLoginController::class, 'login']);
Route::post('/logout', [PegawaiLoginController::class, 'logout'])->name('logout');

Route::middleware(['auth:pegawai'])->group(function () {
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('izin_keluar', IzinKeluarController::class);
    Route::resource('tugas_tambahan', TugasTambahanController::class);
});
