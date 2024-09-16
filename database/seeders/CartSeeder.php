<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carts=[
            'customer_id'=>1,
            'product_id'=>2,
            'qty'=>100,
        ];

        Cart::insert($carts);
    }
}
