<?php

namespace Database\Seeders;

use App\Models\LembagaKelurahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LembagaKelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100 ; $i++) {

            $image = ['no-image.png', 'lembaga-1.png', 'lembaga-2.png', 'lembaga-3.png'];
            $image_rand = $image[array_rand($image)];

            LembagaKelurahan::create([
                'nama' => fake()->name,
                'kode' => fake()->colorName,
                'hukum' => fake()->colorName,
                'alamat' => fake()->address,
                'logo' => $image_rand,
            ]);
        }
    }
}
