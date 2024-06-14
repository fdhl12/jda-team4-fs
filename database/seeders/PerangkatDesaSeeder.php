<?php

namespace Database\Seeders;

use App\Models\PerangkatDesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerangkatDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PerangkatDesa::create([
            'name' => 'Kang Lurah',
            'image' => 'https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg',
            'email' => 'kanglurah@gmail.com',
            'nip' => '-',
            'alamat' => 'kebun raya jeruk melon mangga',
            'jabatan_id' => 1,
        ]);
    }
}
