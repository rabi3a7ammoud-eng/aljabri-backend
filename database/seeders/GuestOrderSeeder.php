<?php

namespace Database\Seeders;

use App\Models\GuestOrder;
use Illuminate\Database\Seeder;

class GuestOrderSeeder extends Seeder
{
    public function run(): void
    {
        $orders = [
            [
                'room_number' => '102',
                'department' => 'cafe',
                'items' => [
                    [
                        'name' => 'Arabic Coffee',
                        'quantity' => 2,
                        'price' => '15.00',
                        'subtotal' => 30.00,
                    ],
                    [
                        'name' => 'Club Sandwich',
                        'quantity' => 1,
                        'price' => '32.00',
                        'subtotal' => 32.00,
                    ],
                ],
                'total_price' => 62.00,
                'notes' => 'Less ice and extra dates if available.',
                'status' => 'pending',
            ],
            [
                'room_number' => '201',
                'department' => 'laundry',
                'items' => [
                    [
                        'name' => 'Thobe Wash & Press',
                        'quantity' => 2,
                        'price' => '20.00',
                        'subtotal' => 40.00,
                    ],
                    [
                        'name' => 'Shirt Wash & Iron',
                        'quantity' => 1,
                        'price' => '15.00',
                        'subtotal' => 15.00,
                    ],
                ],
                'total_price' => 55.00,
                'notes' => 'Please deliver on hangers.',
                'status' => 'in_progress',
            ],
            [
                'room_number' => '205',
                'department' => 'cafe',
                'items' => [
                    [
                        'name' => 'Cappuccino',
                        'quantity' => 1,
                        'price' => '18.00',
                        'subtotal' => 18.00,
                    ],
                    [
                        'name' => 'Fresh Orange Juice',
                        'quantity' => 2,
                        'price' => '16.00',
                        'subtotal' => 32.00,
                    ],
                ],
                'total_price' => 50.00,
                'notes' => null,
                'status' => 'completed',
            ],
            [
                'room_number' => '303',
                'department' => 'laundry',
                'items' => [
                    [
                        'name' => 'Suit Dry Cleaning',
                        'quantity' => 1,
                        'price' => '45.00',
                        'subtotal' => 45.00,
                    ],
                ],
                'total_price' => 45.00,
                'notes' => 'Guest cancelled before pickup.',
                'status' => 'cancelled',
            ],
        ];

        foreach ($orders as $order) {
            GuestOrder::firstOrCreate(
                [
                    'room_number' => $order['room_number'],
                    'department' => $order['department'],
                    'total_price' => $order['total_price'],
                    'status' => $order['status'],
                ],
                [
                    'items' => $order['items'],
                    'notes' => $order['notes'],
                ]
            );
        }
    }
}
