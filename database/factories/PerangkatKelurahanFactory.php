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

        $image = ['no-image.png', 'perangkat-1.jpeg', 'perangkat-2.jpeg', 'perangkat-3.jpeg'];
        $image_rand = $image[array_rand($image)];

        return [
            'name' => fake()->name(),
            'image' => $image_rand,
            'email' => fake()->unique()->safeEmail(),
            'nip' => fake()->numerify,
            'alamat' => fake()->address(),
            'jabatan_id' => Jabatan::get()->random(),
        ];
    }
}
