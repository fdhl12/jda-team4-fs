<?php

namespace Database\Seeders;

use App\Models\ProfileKelurahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileKelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfileKelurahan::insert([
            [
                'type' => 'tentang',
                'data' => 'tentang kelurahan cibeber',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'visimisi',
                'data' => 'visi misi cibeber',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'sejarah',
                'data' => 'sejarah kelurahan cibeber',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'geografis',
                'data' => json_encode([
                    'map' => "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.63559455453!2d107.50518878635513!3d-6.89605198577566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e503ce53d5eb%3A0x8e2c9ed5ffc073bd!2sCibeber%2C%20Cimahi%20Selatan%2C%20Cimahi%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1718941351846!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>",
                    'deskripsi' => 'geografis cibeber'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'demografi',
                'data' => 'data demografi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'struktur_organisasi',
                'data' => 'storage/struktur-organisasi.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'kontak',
                'data' => json_encode([
                    'email' => 'cibeber@cimahikota.go.id',
                    'no_telp' => '022- 6672994',
                    'alamat' => 'Jl. Ibu Ganirah No. 41 Cibeber Cimahi',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'sosial_media',
                'data' => json_encode([
                    'facebook' => 'https://facebook.com/',
                    'twitter' => 'https://twitter.com/',
                    'instagram' => 'https://instagram.com/',
                    'youtube' => 'https://youtube.com/',
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
