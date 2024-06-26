<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10 ; $i++) {
            Layanan::create([
                'nama' => fake()->city,
                'telepon' => fake()->phoneNumber,
                'buka' => '09.00',
                'tutup' => '18.00',
                'alamat' => fake()->address,
            ]);
        }
    }
}
