<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem; // Ensure this path matches your OrderItem model location

class OrderItemSeeder extends Seeder
{
    public function run()
    {
        // Define the data to be inserted
        $orderitems = [
            [
                'order_id' => 'ORD001',
                'product_id' => 'PROD001',
                'qty' => '2',
                'price' => 21.99,
                'discount' => '5%',
                'amount' => 37.98,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 'ORD002',
                'product_id' => 'PROD002',
                'qty' => '1',
                'price' => 49.99,
                'discount' => '10%',
                'amount' => 44.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 'ORD003',
                'product_id' => 'PROD003',
                'qty' => '5',
                'price' => 9.99,
                'discount' => '0%',
                'amount' => 49.95,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 'ORD004',
                'product_id' => 'PROD004',
                'qty' => '3',
                'price' => 15.00,
                'discount' => '20%',
                'amount' => 36.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 'ORD005',
                'product_id' => 'PROD005',
                'qty' => '4',
                'price' => 12.50,
                'discount' => '10%',
                'amount' => 45.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 'ORD006',
                'product_id' => 'PROD006',
                'qty' => '2',
                'price' => 75.00,
                'discount' => '15%',
                'amount' => 127.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 'ORD007',
                'product_id' => 'PROD007',
                'qty' => '7',
                'price' => 5.50,
                'discount' => '5%',
                'amount' => 36.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 'ORD008',
                'product_id' => 'PROD008',
                'qty' => '3',
                'price' => 18.75,
                'discount' => '10%',
                'amount' => 50.62,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 'ORD009',
                'product_id' => 'PROD009',
                'qty' => '6',
                'price' => 7.25,
                'discount' => '8%',
                'amount' => 40.77,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 'ORD010',
                'product_id' => 'PROD010',
                'qty' => '4',
                'price' => 20.00,
                'discount' => '12%',
                'amount' => 70.40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert the data using Eloquent model
        OrderItem::insert($orderitems);
    }
}
