<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
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
            "user_uuid" => User::inRandomOrder()->first()->uuid,
            "book_uuid" => Book::inRandomOrder()->first()->uuid,
            "borrow_date" => fake()->date(),
            "return_date" => fake()->date(),
        ];
    }
}
