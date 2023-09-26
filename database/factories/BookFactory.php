<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "uuid" => fake()->uuid(),
            "category_uuid" => Category::inRandomOrder()->first()->uuid,
            "title" => fake()->sentence(3),
            "author" => fake()->name(),
            "synopsis" => fake()->sentence(100),
            "publisher" => fake()->sentence(5),
        ];
    }
}
