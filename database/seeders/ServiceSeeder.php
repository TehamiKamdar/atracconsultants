<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'service_icon' => 'fa-regular fa-user',
                'service_heading' => 'Career Guidance',
                'service_details' => 'Deciding what profession you should go into is easier when you, have us helping you make an informed decision.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_icon' => 'fa-solid fa-image',
                'service_heading' => 'Career Guidance',
                'service_details' => 'Deciding what profession you should go into is easier when you, have us helping you make an informed decision.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_icon' => 'fa-solid fa-heart',
                'service_heading' => 'Career Guidance',
                'service_details' => 'Deciding what profession you should go into is easier when you, have us helping you make an informed decision.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
