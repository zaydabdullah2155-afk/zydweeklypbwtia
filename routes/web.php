<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di Laravel 11+, file ini dimuat lewat bootstrap/app.php dan seluruh
| route di sini otomatis memakai middleware group "web".
|
*/

// Data berita (satu sumber untuk halaman daftar dan halaman detail)
$data_berita = [
    [
        "judul" => "MBG Mas Burhan Gunawan",
        "slug" => "mbg-mas-burhan-gunawan",
        "penulis" => "Burhan",
        "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laboriosam, reiciendis autem reprehenderit maxime facere repudiandae ipsa quas architecto molestiae minima qui aliquam unde odit! Aspernatur magni voluptate harum eveniet doloribus ipsam. Deserunt officiis autem voluptas alias odio nemo? Optio, praesentium voluptates a natus voluptatibus magnam esse dolorem necessitatibus. Eum praesentium suscipit officia, animi dolor et. Ex in quia nam reiciendis quam ut inventore id? Magni dolores aperiam nihil qui, minima, reiciendis fugiat eligendi omnis labore optio, aliquid dicta provident cupiditate fuga repellat error dolorem pariatur! Neque dicta inventore eligendi vel aut quam voluptatem harum ex explicabo nam laborum voluptates at, quaerat deserunt modi nihil rerum. Dolores, quos. Eos, officia. Dolore sequi vero dolorem delectus nisi facilis tenetur quo nam commodi doloremque inventore esse, sint eveniet ea veritatis non, vel numquam corrupti culpa reprehenderit perferendis maiores quam voluptatem. Nam alias laborum nobis eveniet ullam, pariatur mollitia impedit quae unde rerum.",
    ],
    [
        "judul" => "Indonesia Juara Asean",
        "slug" => "indonesia-juara-asean",
        "penulis" => "Amin",
        "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laboriosam, reiciendis autem reprehenderit maxime facere repudiandae ipsa quas architecto molestiae minima qui aliquam unde odit! Aspernatur magni voluptate harum eveniet doloribus ipsam. Deserunt officiis autem voluptas alias odio nemo? Optio, praesentium voluptates a natus voluptatibus magnam esse dolorem necessitatibus. Eum praesentium suscipit officia, animi dolor et. Ex in quia nam reiciendis quam ut inventore id? Magni dolores aperiam nihil qui,",
    ],
];

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
        "gambar" => "zaid.jpeg",
    ]);
});

Route::get('/berita', function () use ($data_berita) {
    return view('berita', [
        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});

Route::get('/berita/{slug}', function ($slug) use ($data_berita) {
    $singlenews = collect($data_berita)->firstWhere('slug', $slug);

    // Slug tidak ditemukan -> tampilkan halaman 404
    abort_if(! $singlenews, 404);

    return view('beritatunggal', [
        "title" => $singlenews["judul"],
        "singlenews" => $singlenews,
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});