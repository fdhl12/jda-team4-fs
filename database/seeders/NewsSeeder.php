<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'Juara Koding',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ut debitis impedit, praesentium quam molestias quaerat laboriosam velit blanditiis voluptates esse dolore sequi doloremque ad, maxime aperiam distinctio deleniti a.',
                'image' => 'https://teachyourkidscode.com/wp-content/uploads/2022/02/best-coding-language-for-games.jpg',
                'slug' => 'juara-coding',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Juara Panjat Pinang',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ut debitis impedit, praesentium quam molestias quaerat laboriosam velit blanditiis voluptates esse dolore sequi doloremque ad',
                'image' => 'https://teachyourkidscode.com/wp-content/uploads/2022/02/best-coding-language-for-games.jpg',
                'slug' => 'juara-panjat-pinang',
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Juara Panjat Tebing',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ut debitis impedit, praesentium quam molestias quaerat laboriosam velit',
                'image' => 'https://teachyourkidscode.com/wp-content/uploads/2022/02/best-coding-language-for-games.jpg',
                'slug' => 'juara-panjat-tebing',
                'user_id' => 1,
                'created_at' => now(),
            ]
        ]);

        // for ($i = 0; $i < 50; $i++) {
        //     News::insert([
        //         [
        //             'title' => 'Juara Koding',
        //             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ut debitis impedit, praesentium quam molestias quaerat laboriosam velit',
        //             'image' => 'https://teachyourkidscode.com/wp-content/uploads/2022/02/best-coding-language-for-games.jpg',
        //             'slug' => 'juara-coding',
        //             'user_id' => 1,
        //             'created_at' => now(),
        //         ]
        //     ]);
        // }
    }
}
