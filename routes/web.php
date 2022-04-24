<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PrestasiController;

// Route Untuk Ke halaman portal
Route::get('/', function () {
    return view('portal',[
        "title" => "Portal"
    ]);
})->name('portal');
// Route untuk ke halaman website
Route::get('/beranda', [HomeController::class, 'index'])->name('beranda');

// Route untuk kehalaman berita
Route::get('/beranda/berita', [BeritaController::class, 'berita']);
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);

// Route Untuk Halaman Prestasi
Route::get('/beranda/prestasi', [PrestasiController::class, 'prestasi'])->name('prestasi');


// Route untuk ke halaman Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/berita', function () {
    return view('berita');
})->middleware(['auth'])->name('berita');

require __DIR__.'/auth.php';
