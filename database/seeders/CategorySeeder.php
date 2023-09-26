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
            "category_name" => "Fantasy",
        ]);
        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Thriller",
        ]);
        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Drama",
        ]);
        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Romance",
        ]);
        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Fiction",
        ]);
        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Horror",
        ]);
        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Autobiography",
        ]);
        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Mystery",
        ]);
        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Action",
        ]);
        Category::create([
            "uuid" => Str::orderedUuid(),
            "category_name" => "Humor",
        ]);
    }
}
