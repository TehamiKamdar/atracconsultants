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
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'country_name'=>'South Cyprus',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'country_name'=>'Italy',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'country_name'=>'Germany',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'country_name'=>'Canada',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
