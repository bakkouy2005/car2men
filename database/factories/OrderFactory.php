<?php

namespace Database\Factories;

use App\Models\Buyer;
use App\Models\Carpost;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'buyer_id' => Buyer::factory(),
            'seller_id' => Seller::factory(),
            'carpost_id' => Carpost::factory(),
            'total_price' => fake()->word(),
            'status' => fake()->word(),
        ];
    }
}
