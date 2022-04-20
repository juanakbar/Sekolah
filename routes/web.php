<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

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
Route::get('/', [BeritaController::class, 'index'])->name('beranda');

// Route::get('/', function () {
//     return view('portal',[
//         "title" => "Portal"
//     ]);
// })->name('portal');

Route::get('/beranda', [BeritaController::class, 'index'])->name('beranda');
Route::get('/beranda/berita', [BeritaController::class, 'berita']);
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);

// Route::get('/beranda', [BeritaController::class, 'prestasi']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/berita', function () {
    return view('berita');
})->middleware(['auth'])->name('berita');

require __DIR__.'/auth.php';
