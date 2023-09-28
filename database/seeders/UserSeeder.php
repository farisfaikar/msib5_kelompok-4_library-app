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
            "name" => "Admin Doe",
            "email" => "admin@mail.com",
            "password" => bcrypt("password"),
            "role" => "admin",
            "email_verified_at" => now(),
            "remember_token" => Str::random(10),
        ]);

        User::factory(10)->create();
    }
}
