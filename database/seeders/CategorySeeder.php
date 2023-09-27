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
        // prettier-ignore
        $category_names = [
            "Fantasy",
            "Thriller",
            "Drama",
            "Romance",
            "Fiction",
            "Horror",
            "Autobiography",
            "Mystery",
            "Action",
            "Humor",
        ];

        foreach ($category_names as $category_name) {
            Category::create([
                "uuid" => Str::orderedUuid(),
                "category_name" => $category_name,
            ]);
        }
    }
}
