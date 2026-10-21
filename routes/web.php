<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Muhammad Zaid Abdullah",
        "nim" => "13242520030",
        "prodi" => "Teknologi Informasi",
        "gambar" => "H2r.jpg",
    ]);
});
Route::get('/berita', [BeritaController::class, 'tampilberita']);

/// routing untuk handling 1 berita berdasarkan slug
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});