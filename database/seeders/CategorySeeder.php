<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Fiction",
            "color" => fake()->hexColor(),
            "description" => "A versatile genre that explores various aspects of human existence, often blurring the line between reality and imagination.",
        ]);

        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Horror",
            "color" => fake()->hexColor(),
            "description" => "Chilling tales that evoke fear and dread, often featuring supernatural elements and gruesome encounters.",
        ]);

        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Autobiography",
            "color" => fake()->hexColor(),
            "description" => "Real-life stories told firsthand, offering insight into the lives and experiences of individuals.",
        ]);

        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Mystery",
            "color" => fake()->hexColor(),
            "description" => "Puzzling narratives filled with enigmatic clues, challenging readers to uncover the truth.",
        ]);

        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Action",
            "color" => fake()->hexColor(),
            "description" => "High-octane adventures featuring intense physical and often thrilling combat sequences.",
        ]);

        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Humor",
            "color" => fake()->hexColor(),
            "description" => "Laughter-inducing tales that playfully explore the lighter side of life, often through witty humor and satire.",
        ]);
    }
}
