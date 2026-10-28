<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BeritaFactory extends Factory
{
    public function definition(): array
    {
        $judul = fake()->sentence(6);

        return [
            'judul' => $judul,
            'slug' => Str::slug($judul) . '-' . Str::random(5),
            'penulis' => fake()->name(),
            'konten' => fake()->paragraphs(3, true),
        ];
    }
}