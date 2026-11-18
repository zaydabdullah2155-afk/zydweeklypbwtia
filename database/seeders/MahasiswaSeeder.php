<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Muhammad Zaid Abdullah',
                'nim' => 13242520030,
                'prodi' => 'Teknologi Informasi',
                'email' => 'zaid@example.com',
                'nohp' => '081234567890',
                'foto' => 'foto/zaid.jpg',
            ],
        ]);
       
    }
}
