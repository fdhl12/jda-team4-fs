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
        ProfileKelurahan::factory()->create([
            'alamat' => 'Jl. Ibu Ganirah No. 41 Cibeber Cimahi',
            'no_telp' => '022- 6672994 / 022- 6672994',
            'email' => 'cibeber@cimahikota.go.id'
        ]);
    }
}
