<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name" => "admin",
                "email" => "admin@null.net",
                "password" => bcrypt("saycheese"),
                "role" => "admin",
            ],
            [
                "name" => "volunteer",
                "email" => "volunteer@null.net",
                "password" => bcrypt("saycheese"),
                "role" => "volunteer",
            ],
        ]);
    }
}