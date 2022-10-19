<?php

namespace Database\Factories;

use App\Models\Resources;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Resources>
 */
class CenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "Centro Superate ".fake()->name(),
            'description' => fake()->paragraph(),
            'address' => fake()->paragraph(),
            'phone' => fake()->word(),
            'email' => fake()->safeEmail(),
        ];
    }
}
