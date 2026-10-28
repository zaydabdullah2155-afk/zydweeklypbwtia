<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'penulis',
        'konten',
    ];

    public static function ambildata()
    {
        return self::latest()->get();
    }

    public static function getBerita($slug)
    {
        return self::where('slug', $slug)->firstOrFail();
    }
}