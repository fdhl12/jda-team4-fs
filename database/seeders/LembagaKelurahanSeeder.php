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
        for ($i = 0; $i < 12 ; $i++) {

            $nama = [
                'Badan Permusyawaratan Desa ',
                'Lembaga Pemberdayaan Masyarakat ',
                'Pembinaan Kesejahteraan Keluarga ',
                'Karang Taruna Satya Dharma Manggala',
                'Linmas Desa',
                'Kelompok Informasi Masyarakat ',
                'Kelompok Sadar Wisata ',
                'Badan Usaha Milik Desa ',
            ];
            $nama_rand = $nama[array_rand($nama)];

            $kode = [
                'BPD',
                'LPM',
                'PKK',
                'KIM',
                'Pokdarwis',
                'BUMDes',
            ];
            $kode_rand = $kode[array_rand($kode)];

            $hukum = [
                'Pasal 211 UU no 32 Tahun 2004, Pasal 97 PP No 72 tahun 2005'
            ];
            $hukum_rand = $hukum[array_rand($hukum)];

            $image = ['no-image.png', 'lembaga-1.png', 'lembaga-2.png', 'lembaga-3.png'];
            $image_rand = $image[array_rand($image)];

            LembagaKelurahan::create([
                'nama' => $nama_rand,
                'kode' => $kode_rand,
                'hukum' => $hukum_rand,
                'alamat' => fake()->address,
                'logo' => $image_rand,
            ]);
        }
    }
}
