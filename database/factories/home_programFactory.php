<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\home_program>
 */
class home_programFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->catchPhrase(),
            'deskripsi' => fake()->sentence(),
            'gambar' => fake()->imageUrl(),
            'tgl_mulai' => fake()->dateTime(),
            'tgl_selesai' => fake()->dateTime(),

        ];
    }
}
