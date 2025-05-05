<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            [
                'country_name'=>'North Cyprus',
                'country_image' => 'north_cyprus.png',
                'slug'=>'northcyprus',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'country_name'=>'South Cyprus',
                'country_image' => 'south_cyprus.webp',
                'slug'=>'southcyprus',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'country_name'=>'Italy',
                'country_image' => 'italy.jpg',
                'slug'=>'italy',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'country_name'=>'Germany',
                'country_image' => 'germany.webp',
                'slug'=>'germany',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'country_name'=>'Canada',
                'country_image' => 'canada.jpg',
                'slug'=>'canada',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
