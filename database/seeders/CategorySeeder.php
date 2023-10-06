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
        $categoriesData = [
            [
                "category_name" => "Fiction",
                "description" => "A versatile genre that explores various aspects of human existence, often blurring the line between reality and imagination.",
            ],
            [
                "category_name" => "Horror",
                "description" => "Chilling tales that evoke fear and dread, often featuring supernatural elements and gruesome encounters.",
            ],
            [
                "category_name" => "Autobiography",
                "description" => "Real-life stories told firsthand, offering insight into the lives and experiences of individuals.",
            ],
            [
                "category_name" => "Mystery",
                "description" => "Puzzling narratives filled with enigmatic clues, challenging readers to uncover the truth.",
            ],
            [
                "category_name" => "Action",
                "description" => "High-octane adventures featuring intense physical and often thrilling combat sequences.",
            ],
            [
                "category_name" => "Humor",
                "description" => "Laughter-inducing tales that playfully explore the lighter side of life, often through witty humor and satire.",
            ],
            [
                "category_name" => "Romance",
                "description" => "High-spirited romance novels featuring a deep love for one another and a sense of belonging.",
            ],
            [
                "category_name" => "Thriller",
                "description" => "Thrilling stories that explore the darker side of life, often with darker forces and darker emotions.",
            ],
            [
                "category_name" => "Biography",
                "description" => "Real-life stories told firsthand, offering insight into the lives and experiences of individuals.",
            ],
            [
                "category_name" => "Sci-Fi",
                "description" => "Science-fiction novels that explore the future and the unknown.",
            ],
            [
                "category_name" => "History",
                "description" => "Travel stories that explore the past and present, often with a focus on historical events and people.",
            ],
            [
                "category_name" => "Poetry",
                "description" => "Poems that explore the world and its people, often with a focus on the feelings and emotions of people.",
            ],
            [
                "category_name" => "Fantasy",
                "description" => "Fantasy novels that explore the world and its people, often with a focus on the feelings and emotions of people.",
            ],
        ];

        foreach ($categoriesData as $categoryData) {
            Category::create([
                "uuid" => Str::orderedUuid(),
                "category_name" => $categoryData["category_name"],
                "color" => fake()->hexColor(),
                "description" => $categoryData["description"],
            ]);
        }
    }
}
