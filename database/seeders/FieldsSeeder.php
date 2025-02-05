<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fields')->insert(
            [
                [
                    "field" => "Computer Science",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "field" => "Mechanical Engineering",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "field" => "Civil Engineering",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "field" => "Electrical Engineering",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "field" => "Business Administration",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "field" => "Economics",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "field" => "Psychology",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "field" => "Medicine",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "field" => "Law",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "field" => "Architecture",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}