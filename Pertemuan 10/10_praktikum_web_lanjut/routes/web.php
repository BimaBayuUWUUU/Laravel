<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
use App\Models\Mahasiswa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::resource('mahasiswas', MahasiswaController::class);
Route::get('mahasiswas/{Nim}/nilai', [MahasiswaController::class, 'detailNilai'])->name('mahasiswas.nilai');
Route::resource('articles', ArticleController::class);
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);
Route::get('mahasiswas/{nim}/print_value', [MahasiswaController::class, 'print'])->name('mahasiswas.print');
