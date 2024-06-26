<?php

namespace Database\Factories;

use App\Models\Jabatan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PerangkatKelurahan>
 */
class PerangkatKelurahanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => 'images/perangkat-kelurahan/no-image.png',
            'email' => fake()->unique()->safeEmail(),
            'nip' => fake()->numerify,
            'alamat' => fake()->address(),
            'jabatan_id' => Jabatan::get()->random(),
        ];
    }
}
