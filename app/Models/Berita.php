<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
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

    public static function ambildata()
    {
        return self::$data_berita;
    }

    public static function cari($slug)
    {
        foreach (self::$data_berita as $berita) {
            if ($berita["slug"] === $slug) {
                return $berita;
            }
        }

        return null;
    }
}