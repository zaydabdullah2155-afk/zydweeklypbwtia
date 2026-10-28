<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    // {
    //     // User::factory(10)->create();

    

    //     DB::table('users')->insert([
    //         'name' => "Mas zyd",
    //         'email' => 'maszyd@example.com',
    //         'password' => Hash::make('password'),
    //     ]);
    // }

{

    DB::table('beritas')->insert([
        'judul' => "BBM Naik, Pemerintah Diminta Perhatikan Dampak Bagi Masyarakat",
        'slug' => 'BBM-naik-pemerintah-diminta-perhatikan-dampak-bagi-masyarakat',
        'penulis' => 'Admin',
        'konten' => 'Konten berita tentang kenaikan BBM dan dampaknya terhadap masyarakat.',
        
    ]);

}

}