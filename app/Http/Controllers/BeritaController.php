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

    public function tampilberitatunggal($slug)
    {
        $berita = \App\Models\Berita::getBerita($slug);
        return view('beritatunggal', [
            "title" => $berita->judul,
            "singlenews" => $berita,
        ]);
    }
}