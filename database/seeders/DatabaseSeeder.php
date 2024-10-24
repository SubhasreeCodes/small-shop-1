<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),

        ]);

        User::factory()->create([
            'name' => 'balaji',
            'email' => 'balaji@gmail.com',
            'password' => Hash::make('balaji'),

        ]);

        User::factory()->create([
            'name' => 'subha',
            'email' => 'subha@gmail.com',
            'password' => Hash::make('subha'),

        ]);

        // Call the CountrySeeder class
        $this->call(CountrySeeder::class);

        // Call the StateSeeder class
        $this->call(StateSeeder::class);

        // Call the CitySeeder class
        $this->call(CitySeeder::class);

        // Call the CategorySeeder class
        $this->call(CategorySeeder::class);

        // Call the BrandSeeder class
        $this->call(BrandSeeder::class);

        // Call the ProductSeeder class
        $this->call(ProductSeeder::class);

        // Call the CartSeeder class
        $this->call(CartSeeder::class);

        // Call the OrderSeedr class
        $this->call(OrderSeeder::class);

        // Call the OrderItemSeeder class
        $this->call(OrderItemSeeder::class);
    }
}
