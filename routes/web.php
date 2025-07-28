<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Auth\PegawaiLoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [PegawaiLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PegawaiLoginController::class, 'login']);
Route::post('/logout', [PegawaiLoginController::class, 'logout'])->name('logout');

Route::middleware(['auth:pegawai'])->group(function () {
    Route::resource('pegawai', PegawaiController::class);
});
