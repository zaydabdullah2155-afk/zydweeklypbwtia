<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', [
        'title' => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
        'name' => 'Zed',
        'nim' => '123456789',
        'prodi' => 'Informatika',
        'gambar' => 'path/to/image.jpg'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        'title' => 'Berita'
    ]);
});
