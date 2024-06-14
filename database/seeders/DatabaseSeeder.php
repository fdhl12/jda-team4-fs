<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\PerangkatDesa;
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
            CategorySeeder::class,
            ArticleSeeder::class,
            JabatanSeeder::class,
            PerangkatDesaSeeder::class,
            ProfileKelurahanSeeder::class,
        ]);
    }
}
