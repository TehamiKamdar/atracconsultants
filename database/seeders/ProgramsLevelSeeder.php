<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramsLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program_levels')->insert(
            [
                [
                    "program_name" => "Associate Degree",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "program_name" => "Bachelors",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "program_name" => "Masters",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    "program_name" => "Ph.D",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
