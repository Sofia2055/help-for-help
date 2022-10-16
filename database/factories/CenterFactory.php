<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resources>
 */
class centerFactory extends Factory
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
