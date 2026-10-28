<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Berita::factory(5)->create();
        
        // DB::table('users')->insert([
        //     'name' => "Adelia eka",
        //     'email' => 'adellia311@gmail.com',
        //     'password' => Hash::make('admin12345678++//36#'),
        // ]);
    }
}