<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define multiple records to be inserted
        $carts = [
            [
                'customer_id' => 1,
                'product_id' => 2,
                'qty' => 100,
            ],
            [
                'customer_id' => 2,
                'product_id' => 3,
                'qty' => 50,
            ],
            [
                'customer_id' => 3,
                'product_id' => 1,
                'qty' => 75,
            ],
            [
                'customer_id' => 4,
                'product_id' => 4,
                'qty' => 20,
            ],
            [
                'customer_id' => 5,
                'product_id' => 5,
                'qty' => 30,
            ],
            [
                'customer_id' => 1,
                'product_id' => 6,
                'qty' => 10,
            ],
            [
                'customer_id' => 2,
                'product_id' => 7,
                'qty' => 5,
            ],
            
            [
                'customer_id' => 6,
                'product_id' => 8,
                'qty' => 15,
            ],
            [
                'customer_id' => 7,
                'product_id' => 9,
                'qty' => 40,
            ],
            [
                'customer_id' => 8,
                'product_id' => 10,
                'qty' => 25,
            ],
            [
                'customer_id' => 9,
                'product_id' => 11,
                'qty' => 8,
            ],
            [
                'customer_id' => 10,
                'product_id' => 12,
                'qty' => 60,
            ],
        ];

        // Insert the records into the "carts" table
        Cart::insert($carts);
    }
}
