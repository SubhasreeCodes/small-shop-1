<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // You can add more countries as needed
        $countries = [
            [
                'name' => 'United States of America',
                'code' => 'USA'
            ],
            [
                'name' => 'Canada',
                'code' => 'CAN'
            ],
            [
                'name' => 'United Kingdom',
                'code' => 'UK'
            ],
            [
                'name' => 'India',
                'code' => 'IND'
            ],
            // Add more countries here
        ];

        // Insert data into the countries table
        // DB::table('countries')->insert($countries);

        //or
        foreach ($countries as $row)
        {
            Country::create($row);
        }
    }
}
