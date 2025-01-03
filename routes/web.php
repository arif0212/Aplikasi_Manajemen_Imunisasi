<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KmsController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BidanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VaksinController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\IbuController;


Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Route::post('/daftar-tambah', [PendaftaranController::class, 'storePendaftaran'])->name('storePendaftaran');

// Route::get('/login', [MainController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('loginPost');
Route::post('/logout', [MainController::class, 'logout'])->name('logout');

Route::middleware(['admin'])->group(function () {
    Route::namespace ('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/beranda', [MainController::class, 'beranda'])->name('beranda');

        Route::namespace ('pegawai')->prefix('pegawai')->name('pegawai.')->group(function () {
            Route::get('/', [PegawaiController::class, 'index'])->name('index');
            Route::post('/', [PegawaiController::class, 'store'])->name('store');
            Route::get('/{uuid}', [PegawaiController::class, 'edit'])->name('edit');
            Route::put('/{uuid}', [PegawaiController::class, 'update'])->name('update');
            Route::get('/delete/{uuid}', [PegawaiController::class, 'destroy'])->name('destroy');
        });

        Route::namespace ('bidan')->prefix('bidan')->name('bidan.')->group(function () {
            Route::get('/', [BidanController::class, 'index'])->name('index');
            Route::post('/', [BidanController::class, 'store'])->name('store');
            Route::get('/{uuid}', [BidanController::class, 'edit'])->name('edit');
            Route::put('/{uuid}', [BidanController::class, 'update'])->name('update');
            Route::get('/delete/{uuid}', [BidanController::class, 'destroy'])->name('destroy');
        });

        Route::namespace ('anak')->prefix('anak')->name('anak.')->group(function () {
            Route::get('/', [AnakController::class, 'index'])->name('index');
            Route::post('/', [AnakController::class, 'store'])->name('store');
            Route::get('/detail/{uuid}', [AnakController::class, 'show'])->name('show');
            Route::get('/{uuid}', [AnakController::class, 'edit'])->name('edit');
            Route::put('/{uuid}', [AnakController::class, 'update'])->name('update');
            Route::get('/delete/{uuid}', [AnakController::class, 'destroy'])->name('destroy');
        });

        Route::namespace ('ibu')->prefix('ibu')->name('ibu.')->group(function () {
            Route::get('/', [IbuController::class, 'index'])->name('index');
            Route::post('/', [IbuController::class, 'store'])->name('store');
            Route::get('/detail/{uuid}', [IbuController::class, 'show'])->name('show');
            Route::get('/{uuid}', [IbuController::class, 'edit'])->name('edit');
            Route::put('/{uuid}', [IbuController::class, 'update'])->name('update');
            Route::get('/delete/{uuid}', [IbuController::class, 'destroy'])->name('destroy');
            Route::get('/ibu/{id}', [PendaftaranController::class, 'getIbuData'])->name('admin.pendaftaran.getIbuData');

        });

        Route::namespace ('vaksin')->prefix('vaksin')->name('vaksin.')->group(function () {
            Route::get('/', [VaksinController::class, 'index'])->name('index');
            Route::post('/', [VaksinController::class, 'store'])->name('store');
            Route::get('/detail/{uuid}', [VaksinController::class, 'show'])->name('show');
            Route::get('/{uuid}', [VaksinController::class, 'edit'])->name('edit');
            Route::put('/{uuid}', [VaksinController::class, 'update'])->name('update');
            Route::get('/delete/{uuid}', [VaksinController::class, 'destroy'])->name('destroy');
        });

        Route::namespace ('pendaftaran')->prefix('pendaftaran')->name('pendaftaran.')->group(function () {
            Route::get('/', [PendaftaranController::class, 'index'])->name('index');
            Route::get('/data-anak/tambah', [PendaftaranController::class, 'anak'])->name('anak');
            Route::post('/', [PendaftaranController::class, 'store'])->name('store');
            Route::get('/detail/{uuid}', [PendaftaranController::class, 'show'])->name('show');
            Route::get('/verif/{uuid}', [PendaftaranController::class, 'verif'])->name('verif');
            Route::get('/{uuid}', [PendaftaranController::class, 'edit'])->name('edit');
            Route::put('/{uuid}', [PendaftaranController::class, 'update'])->name('update');
            Route::get('/delete/{uuid}', [PendaftaranController::class, 'destroy'])->name('destroy');
        });

        Route::namespace ('kms')->prefix('kms')->name('kms.')->group(function () {
            Route::get('/{uuid}', [KmsController::class, 'index'])->name('index');
            Route::post('/store', [KmsController::class, 'store'])->name('store');
            Route::get('/edit/{uuid}', [KmsController::class, 'edit'])->name('edit');
            Route::put('/edit/{uuid}', [KmsController::class, 'update'])->name('update');
            Route::get('/delete/{uuid}', [KmsController::class, 'destroy'])->name('destroy');
        });

        Route::namespace ('imunisasi')->prefix('imunisasi')->name('imunisasi.')->group(function () {
            Route::get('/', [ImunisasiController::class, 'index'])->name('index');
            Route::post('/', [ImunisasiController::class, 'store'])->name('store');
            Route::get('/show/{uuid}', [ImunisasiController::class, 'show'])->name('show');
            Route::get('/edit/{uuid}', [ImunisasiController::class, 'edit'])->name('edit');
            Route::put('/edit/{uuid}', [ImunisasiController::class, 'update'])->name('update');
            Route::get('/delete/{uuid}', [ImunisasiController::class, 'destroy'])->name('destroy');
        });

        Route::namespace ('laporan')->prefix('laporan')->name('laporan.')->group(function () {
            Route::get('/pegawai', [LaporanController::class, 'pegawai'])->name('pegawai');
            Route::get('/bidan', [LaporanController::class, 'bidan'])->name('bidan');
            Route::get('/anak', [LaporanController::class, 'anak'])->name('anak');
            Route::get('/ibu', [LaporanController::class, 'ibu'])->name('ibu');

            Route::get('/vaksin', [LaporanController::class, 'vaksin'])->name('vaksin');
            Route::get('/pendaftaran', [LaporanController::class, 'pendaftaran'])->name('pendaftaran');
            Route::get('/kms/{anak_id}', [LaporanController::class, 'kms'])->name('kms');
            Route::get('/imunisasi', [LaporanController::class, 'imunisasi'])->name('imunisasi');
            Route::get('/imunisasi/laporan/show/{id}', [LaporanController::class, 'imunisasi_show'])->name('imunisasi_show');
        });

    });
});
