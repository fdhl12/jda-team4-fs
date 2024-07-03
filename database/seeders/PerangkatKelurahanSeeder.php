<?php

namespace Database\Seeders;

use App\Models\PerangkatKelurahan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerangkatKelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*PerangkatKelurahan::factory(10)->create();*/

        $image = ['perangkat-default.png', 'perangkat-1.jpg', 'perangkat-2.jpg', 'perangkat-3.jpg'];

        for ($i = 0; $i < 3 ; $i++) {
            PerangkatKelurahan::create([
                'name' => 'BAMBANG WAHYU PURWASTO, S.STP.',
                'image' => $image[array_rand($image)],
                'email' => fake()->unique()->safeEmail(),
                'nip' => '198708062006021002',
                'alamat' => fake()->address(),
                'jabatan_id' => 5
            ]);

            PerangkatKelurahan::create([
                'name' => 'GUN GUN BAHRUL HAYAT, S.Pd.',
                'image' => $image[array_rand($image)],
                'email' => fake()->unique()->safeEmail(),
                'nip' => '197506052007011021',
                'alamat' => fake()->address(),
                'jabatan_id' => 2
            ]);

            PerangkatKelurahan::create([
                'name' => 'HARITS WIRA PRAKASA, S.T., M.M.',
                'image' => $image[array_rand($image)],
                'email' => fake()->unique()->safeEmail(),
                'nip' => '198205022010011016',
                'alamat' => fake()->address(),
                'jabatan_id' => 1
            ]);

            PerangkatKelurahan::create([
                'name' => 'SRIYANTORO, S.Sos.',
                'image' => $image[array_rand($image)],
                'email' => fake()->unique()->safeEmail(),
                'nip' => '197510281997011001',
                'alamat' => fake()->address(),
                'jabatan_id' => 3
            ]);

            PerangkatKelurahan::create([
                'name' => 'TOTO HARYANTO, S.E.',
                'image' => $image[array_rand($image)],
                'email' => fake()->unique()->safeEmail(),
                'nip' => '197011011993101001',
                'alamat' => fake()->address(),
                'jabatan_id' => 4
            ]);
        }

    }
}
