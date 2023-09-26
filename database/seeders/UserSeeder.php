<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "uuid" => Str::orderedUuid(),
            "email" => "admin@mail.com",
            "username" => "admin",
            "password" => bcrypt("password"),
            "role" => "admin",
        ]);

        User::factory(10)->create();
    }
}
