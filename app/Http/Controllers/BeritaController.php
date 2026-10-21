<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function tampilberita()
    {
        $beritas = \App\Models\Berita::ambildata();
        return view('berita', [
            "title" => "Berita",
            "beritas" => $beritas,
        ]);
    }

    public static function tampilberitatunggal($slug)

    {
        $berita = \App\Models\Berita::getBerita($slug);
        return view('beritatunggal', [
            "title" => \App\Models\Berita::getJudul($slug),
            "singlenews" => $berita,
        ]);
    }
}
