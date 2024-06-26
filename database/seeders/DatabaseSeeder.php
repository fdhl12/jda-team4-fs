<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\PerangkatKelurahan;
use App\Models\ProfileKelurahan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            NewsSeeder::class,
            JabatanSeeder::class,
            AnnouncementSeeder::class,
            PerangkatKelurahanSeeder::class,
            ProfileKelurahanSeeder::class,
            PengaturanSeeder::class,
            GaleriSeeder::class,
            LayananSeeder::class
        ]);
    }
}
