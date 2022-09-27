<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resources>
 */
class resourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $res_quan = fake()->randomDigit();

        return [
            'product_name' => fake()-> word(),
            'description' => fake()->sentence(),
            'state' => fake()->randomElement(["new","as new","use"]),
            'resources_quantity'=> $res_quan,
            'given_quantity' => fake()->numberBetween(0 , $res_quan),
            'center_id' => 1,
            'received' => (bool)random_int(0,1),
        ];
    }


  
    
}