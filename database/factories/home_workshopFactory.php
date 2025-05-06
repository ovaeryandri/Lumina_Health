<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\home_workshop>
 */
class home_workshopFactory extends Factory
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
            'lokasi' => fake()->city(),
            'waktu_mulai' => fake()->dateTime(),
            'waktu_selesai' => fake()->dateTime(),
            'maks_kapasitas' => fake()->randomNumber(),
            'gambar' => fake()->imageUrl(),
        ];
    }
}
