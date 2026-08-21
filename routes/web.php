<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
 return 'Selamat datang di Sistem E-PKL';
});

Route::get('/perusahaan', [PerusahaanController::class, 'index'])
    ->name('perusahaan.index');

Route::get('/siswa', [SiswaController::class, 'index'])
    ->name('siswa.index');