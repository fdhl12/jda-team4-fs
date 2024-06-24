<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengaturan::insert([
            [
                'type' => 'name',
                'data' => 'Kelurahan Cibeber',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'description',
                'data' => 'Website Kelurahan Cibeber - Kota Cimahi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'logo',
                'data' => 'storage/logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'logo_text',
                'data' => 'storage/logo-text.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'keywords',
                'data' => 'Kelurahan Cibeber',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'tags',
                'data' => 'kelurahan, desa, cibeber',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
