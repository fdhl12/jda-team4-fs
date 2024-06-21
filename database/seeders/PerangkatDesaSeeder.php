<?php

namespace Database\Seeders;

use App\Models\PerangkatDesa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerangkatDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PerangkatDesa::factory(10)->create();

        DB::table('perangkat_desas')->insert([
            [
                'name' => 'Kang Lurah',
                'image' => 'https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg',
                'email' => 'kanglurah@gmail.com',
                'nip' => '-',
                'alamat' => 'kebun raya jeruk melon mangga',
                'jabatan_id' => 1,
            ],
            [
                'name' => 'Kang Sekretaris',
                'image' => 'https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg',
                'email' => 'sekre@gmail.com',
                'nip' => '-',
                'alamat' => 'kebun raya jeruk melon mangga',
                'jabatan_id' => 2,
            ],
            [
                'name' => 'Kang Keuangan',
                'image' => 'https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg',
                'email' => 'beruang@gmail.com',
                'nip' => '-',
                'alamat' => 'kebun raya jeruk melon mangga',
                'jabatan_id' => 3,
            ],
        ]);
    }
}
