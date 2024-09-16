<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Enums\OrderStatus;
use App\Enums\PaymentMethod;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'customer_id' => 1,
                'order_number' => 'ORD001',
                'order_date' => Carbon::now(),
                'total_amount' => 150.00,
                // 'order_status' => ORDER_PLACED,
                // 'payment_method' => CASH,
            ],
            [
                'customer_id' => 2,
                'order_number' => 'ORD002',
                'order_date' => Carbon::now(),
                'total_amount' => 250.50,
                // 'order_status' => ORDER_SHIPPED,
                // 'payment_method' => CREDIT_CARD,
            ],
            [
                'customer_id' => 3,
                'order_number' => 'ORD003',
                'order_date' => Carbon::now(),
                'total_amount' => 99.99,
                // 'order_status' => ORDER_DELIVERED,
                // 'payment_method' => ONLINE_BANKING,
            ],
        ];

        // Insert each order into the database
        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
