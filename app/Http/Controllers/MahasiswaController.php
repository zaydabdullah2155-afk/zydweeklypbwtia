<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public static function index()
    {
        $datas = Mahasiswa::all();

        return view('mahasiswa', compact('datas'));
    }
}