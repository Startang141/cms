<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

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
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);
//nomer 5
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Praktikum 3
Route::get('/', function(){
    echo "Ini adalah halaman <b>home</b>";
});

//Route Prefix Product
Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games', function(){
        echo "Ini adalah halaman <b>produk Marbel Edu Games</b>";
    });

    Route::get('/marbel-and-friends-kids-games', function(){
        echo "Ini adalah halaman <b>produk Marbel And Friends Kids Games</b>";
    });

    Route::get('/riri-story-books', function(){
        echo "Ini adalah halaman <b>produk Riri Story Books</b>";
    });

    Route::get('/kolak-kids-songs', function(){
        echo "Ini adalah halaman <b>produk Kolak Kids Songs</b>";
    });
});

//Route Param News
Route::get('news', function(){
    echo "Ini adalah halaman <b>news</b>";
});

Route::get('news/{judul}', function($judul){
    echo "ini adalah halaman <b>news " . $judul;
});

//Route Prefix Program
Route::prefix('/program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);

    Route::get('/magang', [ProgramController::class, 'magang']);

    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

//Route Normal About Us
Route::get('/about-us', function(){
    echo "
        NIM     : 2041720130
        <br>
        Nama    : Bintang Adiyatma Agung Putra
        <br>
        Kelas   : TI-2G";
});

//Route Resource Contact
Route::resource('/contact-us', ContactController::class, [
    'only' => ['index']
]);