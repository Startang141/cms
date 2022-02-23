<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

// //Praktikum 1
// // URL : /
// Route::get('/', function () {
//     echo "Hi! Selamat Datang di Website Laravel";
// });
// // URL : /about
// Route::get('/about', function () {
//     echo "
//     NIM     : 2041720130
//     <br>
//     Nama    : Bintang Adiyatma Agung Putra
//     <br>
//     Kelas   : TI-2G";
// });
// // URL : /articles/{id}
// Route::get('/articles/{id}', function ($id) {
//     echo "Ini adalah halaman Artikel dengan ID " . $id;
// });

//Praktikum 2
//Nomer 3
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);
//nomer 5
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);