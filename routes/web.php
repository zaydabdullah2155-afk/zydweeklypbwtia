<?php

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnArgument;

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
        "gambar" => "zaid.jpeg",
    ]);
});






Route::get('/berita', function () {
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
        ]

    ];

    return view('berita', [
        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});

Route::get('/berita/{slug}', function ($slug) {
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
        ]

    ];

    $singlenews = [];

    foreach ($data_berita as $berita) {
        if ($berita["slug"] == $slug) {
            $singlenews = $berita;
        }
    }

    return view('beritatunggal', [
        "title" => "judul berita tunggal",
        "singlenews" => $singlenews,
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});