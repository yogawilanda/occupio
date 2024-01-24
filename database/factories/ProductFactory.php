<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->words(2, true),
            'price' => fake()->randomFloat(2, 0, 1000),
            'description' => fake()->paragraph(),
            'image' => fake()->imageUrl(640, 480, 'cats'),
            'created_at' => now(),
        ];
    }

    // generate the product

}
