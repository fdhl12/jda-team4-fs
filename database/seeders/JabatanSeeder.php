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
        DB::table('jabatans')->insert([
            ['name' => 'Kepala Desa', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sekretaris Desa', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kaur Keuangan', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
