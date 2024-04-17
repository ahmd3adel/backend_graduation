<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Supplier;
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
            'name' => fake()->name,
            'description' => fake()->text,
            'price' => fake()->randomFloat(2, 10, 1000),
            'quantity' => fake()->numberBetween(1, 100),
            'dimensions' => fake()->text,
            'category_id' => Category::all()->random()->id,
            'supplier_id' => Supplier::all()->random()->id,
            'image' => fake()->imageUrl(), // Assuming the image field represents a URL to an image
            'status' => fake()->randomElement(['active', 'inactive']),
        ];
    }
}
