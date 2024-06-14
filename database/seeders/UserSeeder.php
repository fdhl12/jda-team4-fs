<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'KangAdmin',
            'email' => 'kangadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role_id' => 1,
        ]);
    }
}
