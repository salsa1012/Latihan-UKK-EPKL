<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
 return 'Selamat datang di Sistem E-PKL';
});

Route::get('/tentang', function () {
    return 'Halaman ini berisi informasi tentang modul E-PKL sekolah.';
});

Route::get('/kontak', function () {
    return 'Hubungi guru pembimbing PKL di ruang RPL.';
});