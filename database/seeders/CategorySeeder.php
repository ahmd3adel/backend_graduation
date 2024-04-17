<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Factory $factory): void
    {
        $cat =
            [[
                'name' => 'furniture',
                'description' => fake()->text,
                'status' => 'active'
            ], [
            'name' => 'Office Furniture',
            'description' => fake()->text(),
            'status' => 'active'
        ], [
            'name' => 'Lighting',
            'description' => fake()->text,
            'status' => 'active'
        ], [
            'name' => 'Fabric & Bedding',
            'description' => fake()->text,
            'status' => 'active'
        ], [
            'name' => 'Kitchen & Bathroom',
            'description' => fake()->text,
            'status' => 'active'
        ], [
                'name' => 'Appliances',
                'description' => fake()->text,
                'status' => 'active'
            ]];
        foreach ($cat as $categoryData) {
            Category::create($categoryData);
        }

    }
}
