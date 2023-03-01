<?php

use App\Http\Controllers\AboutUs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PortofolioController;
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

Route::get('/home', HomeController::class);

Route::prefix('portofolio')->group(function () {
    Route::get('/', [PortofolioController::class, 'index']);
});

// Route::get('/news/{params}', function (string $params) {
//     return view('news', [
//         'params' => $params
//     ]);
// });

// Route::prefix('program')->group(function () {
//     Route::get('/{params}', function (string $params) {
//         return view('program', [
//             'params' => $params
//         ]);
//     });
// });

Route::get('/about-us', AboutUsController::class);

Route::resource('contact-us', ContactUSController::class)->only(['index', 'store']);