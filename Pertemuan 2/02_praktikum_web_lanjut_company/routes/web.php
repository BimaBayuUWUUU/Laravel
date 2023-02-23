<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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
/*No 1*/
Route::get('/', function () {
    return "Menampilkan halaman awal website";
   });
/*No 2*/
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo"Menampilkan daftar product Marbel Edu Games";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        echo"Menampilkan daftar product Marbel and Friends Kids Games";
    });
    Route::get('/riri-story-books', function () {
        echo"Menampilkan daftar product Riri Story Books";
    });
    Route::get('/kolak-kids-songs', function () {
        echo"Menampilkan daftar product Kolak Kids Songs";
    });
});
/*No 3*/
Route::get('/news/{link?}', function ($link = null) {
    return $link;
});

Route::get('/news/{link?}', function ($link = 'Not Found') {
    return "Menampilkan Daftar berita (".$link.")";
}); 
/*No 4*/
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo"Menampilkan Daftar Program Karir";
    });
    Route::get('/magang', function () {
        echo"Menampilkan Daftar Program Magang";
    });
    Route::get('/kunjungan-industri', function () {
        echo"Menampilkan Daftar Program Kunjungan Industri";
    });
});
/*No 5*/
Route::get('/about-us', function () {
    return "Bima Bayu Saputra || 2141720019";
   });
/*No 6*/
Route::resource('contactUs', ContactUsController::class)->only([
    'index', 'store'
]);