<?php

namespace Database\Seeders;

use App\Models\Galeri;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 12 ; $i++) {

            $image = ['galeri-1.jpeg', 'galeri-2.jpeg', 'galeri-3.jpeg'];
            $image_rand = $image[array_rand($image)];

            Galeri::create([
                'image' => $image_rand,
                'description' => fake()->name,
                'user_id' => 1
            ]);
        }
    }
}
