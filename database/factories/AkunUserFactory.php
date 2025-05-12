<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AkunUser>
 */
class AkunUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'umur' => fake()->numberBetween(10, 60),
            'kelamin' => fake()->randomElement(['Pria', 'Wanita']),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('123456'),
        ];
    }
}
