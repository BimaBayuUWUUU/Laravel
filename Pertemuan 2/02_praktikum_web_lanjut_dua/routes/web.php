<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
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
/*Praktikum 2_1*/
// Route::get('/hello', [WelcomeController::class, 'hello']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/index', [PageController::class, 'index']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

/*Praktikum 2_2*/
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
