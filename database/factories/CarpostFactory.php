<?php

namespace Database\Factories;

use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarpostFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'seller_id' => Seller::factory(),
            'title' => fake()->sentence(4),
            'description' => fake()->text(),
            'image' => fake()->word(),
            'price' => fake()->word(),
            'brand' => fake()->word(),
            'model' => fake()->word(),
            'build_year' => fake()->numberBetween(-10000, 10000),
            'kilometer' => fake()->numberBetween(-10000, 10000),
            'horsepower' => fake()->numberBetween(-10000, 10000),
            'previous_owners' => fake()->numberBetween(-10000, 10000),
            'status' => fake()->word(),
        ];
    }
}
