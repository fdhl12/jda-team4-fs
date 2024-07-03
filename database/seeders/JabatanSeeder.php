<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('jabatans')->insert([
//            ['name' => 'Lurah', 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Sekretasi', 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Kepala Seksi', 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Pengelola', 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Pengadministrasi', 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Operator', 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Keamanan', 'created_at' => now(), 'updated_at' => now()],
//            ['name' => 'Petugas', 'created_at' => now(), 'updated_at' => now()],
//        ]);

        Jabatan::create([
            'name' => 'Kepala Seksi Ekonomi, Pemberdayaan Masyarakat dan Kesejahteraan Sosial'
        ]);

        Jabatan::create([
            'name' => 'Sekretaris'
        ]);

        Jabatan::create([
            'name' => 'Kepala Seksi Sarana dan Prasarana Lingkungan'
        ]);

        Jabatan::create([
            'name' => 'Kepala Seksi Pemerintahan, Ketentraman dan Ketertiban Umum'
        ]);

        Jabatan::create([
            'name' => 'Lurah'
        ]);
    }
}
