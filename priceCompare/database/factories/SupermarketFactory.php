<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supermarket>
 */
class SupermarketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>fake()->company,
            "introduction"=>fake()->realText($maxNbChars = 500, $indexSize = 5),
            "postcode"=>fake()->postcode,
            "prefecture"=>fake()->prefecture,
            "city"=>fake()->city,
            'streetAddress' => fake()->streetAddress,
        ];
    }
}
