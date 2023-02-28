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
// No1
Route::get('/', function () {
    return view('home');
});
// No 2
Route::prefix('product')->group(function () {
    Route::get('/{params}', function (string $params) {
        return view('product', [
            'params' => $params
        ]);
    });
});
// No 3
Route::get('/news/{params}', function (string $params) {
    return view('news', [
        'params' => $params
    ]);
});
// No 4
Route::prefix('program')->group(function () {
    Route::get('/{params}', function (string $params) {
        return view('program', [
            'params' => $params
        ]);
    });
});
// No 5
Route::get('/about-us', function () {
    return view('about-us');
});
// No 6
Route::resource('contact-us', ContactUSController::class)->only(['index', 'store']);