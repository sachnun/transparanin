<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardAkunController;
use App\Http\Controllers\DashboardAuthController;
use App\Http\Controllers\DashboardBarangController;
use App\Http\Controllers\DashboardActivityController;
use App\Http\Controllers\DashboardPenerimaController;
use App\Http\Controllers\DashboardTrackController;
use App\Http\Controllers\DashboardValidasiController;
use App\Http\Controllers\DashboardWargaController;
use App\Http\Controllers\LandingPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingPageController::class, 'index']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [DashboardAuthController::class, 'login'])->name('login');
    Route::post('/auth', [DashboardAuthController::class, 'authenticate'])->name('auth');
});

Route::get('logout', [DashboardAuthController::class, 'logout'])->name('logout');

// Route dashboard namespace
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('ringkasan');

    Route::prefix('bantuan')->group(function () {
        Route::resource('/barang', DashboardBarangController::class);
        Route::resource('/penerima', DashboardPenerimaController::class);
        Route::resource('penerima.warga', DashboardWargaController::class);
        Route::post('/minta_bantuan', [DashboardPenerimaController::class, 'minta_bantuan'])->name('minta_bantuan');
    });

    Route::resource('/track', DashboardTrackController::class);

    Route::prefix('validasi')->group(function () {
        Route::get('/permintaan', [DashboardValidasiController::class, 'permintaan'])->name('validasi.permintaan');
        Route::get('/terkirim', [DashboardValidasiController::class, 'terkirim'])->name('validasi.terkirim');
        Route::get('/batal', [DashboardValidasiController::class, 'batal'])->name('validasi.batal');

        Route::namespace('aksi')->group(function () {
            Route::post('{id}/terkirim', [DashboardValidasiController::class, 'aksi_terkirim'])->name('validasi.aksi_terkirim');
            Route::post('{id}/batal', [DashboardValidasiController::class, 'aksi_batal'])->name('validasi.aksi_batal');
        });
    });
    Route::resource('/validasi', DashboardValidasiController::class)
        ->only('store', 'update', 'destroy');

    Route::resource('/akun', DashboardAkunController::class);
    Route::get('/activity', [DashboardActivityController::class, 'index'])->name('activity');
});
