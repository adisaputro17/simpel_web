<?php

use App\Models\Pegawai;
use App\Models\IzinKeluar;
use App\Models\TugasTambahan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Auth\PegawaiLoginController;
use App\Http\Controllers\IzinKeluarController;
use App\Http\Controllers\TugasTambahanController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PenampilanHarianController;
use App\Http\Controllers\LayananController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [PegawaiLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PegawaiLoginController::class, 'login']);
Route::post('/logout', [PegawaiLoginController::class, 'logout'])->name('logout');

Route::middleware(['auth:pegawai'])->group(function () {
        Route::get('/dashboard', function () {
        return view('dashboard', [
            'totalPegawai' => Pegawai::count(),
            'totalIzin' => IzinKeluar::count(),
            'totalTugas' => TugasTambahan::count(),
        ]);
    })->name('dashboard');
    
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('izin_keluar', IzinKeluarController::class);
    Route::resource('tugas_tambahan', TugasTambahanController::class);

    Route::prefix('penilaian')->group(function () {
        Route::get('{jenis}', [PenilaianController::class, 'index'])->name('penilaian.index');
        Route::get('{jenis}/create', [PenilaianController::class, 'create'])->name('penilaian.create');
        Route::post('{jenis}', [PenilaianController::class, 'store'])->name('penilaian.store');
        Route::get('{jenis}/{id}/edit', [PenilaianController::class, 'edit'])->name('penilaian.edit');
        Route::put('{jenis}/{id}', [PenilaianController::class, 'update'])->name('penilaian.update');
        Route::delete('{jenis}/{id}', [PenilaianController::class, 'destroy'])->name('penilaian.destroy');
    });

    Route::get('penampilan', [PenampilanHarianController::class, 'index'])->name('penampilan.index');
    Route::get('penampilan/create', [PenampilanHarianController::class, 'create'])->name('penampilan.create');
    Route::post('penampilan', [PenampilanHarianController::class, 'store'])->name('penampilan.store');

    Route::resource('layanan', LayananController::class);
});