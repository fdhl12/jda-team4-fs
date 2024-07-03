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

            $image = [
                'galeri-1.jpeg',
                'galeri-2.jpeg',
                'galeri-3.jpeg',
                'galeri-4.jpeg',
                'galeri-5.jpeg',
                'galeri-6.jpeg',
                'galeri-7.jpeg',
                'galeri-8.jpeg',
            ];
            $image_rand = $image[array_rand($image)];

            Galeri::create([
                'image' => $image_rand,
                'description' => 'Sambutan',
                'user_id' => 1
            ]);
        }
    }
}
