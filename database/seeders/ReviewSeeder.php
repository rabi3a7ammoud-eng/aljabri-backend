<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $reviews = [
            [
                'room_number' => '101',
                'rating' => 5,
                'comment' => 'Spotless rooms, fast room service, and very welcoming staff.',
            ],
            [
                'room_number' => '203',
                'rating' => 5,
                'comment' => 'إقامة رائعة وخدمة ممتازة جداً، شكراً لفريق فندق الجابري.',
            ],
            [
                'room_number' => '205',
                'rating' => 4,
                'comment' => 'Comfortable stay and great Arabic coffee from the cafe.',
            ],
            [
                'room_number' => '302',
                'rating' => 4,
                'comment' => 'Quick laundry turnaround and reliable Wi-Fi throughout the stay.',
            ],
            [
                'room_number' => '304',
                'rating' => 3,
                'comment' => 'Good location and clean room, though check-in took a few minutes.',
            ],
        ];

        foreach ($reviews as $review) {
            Review::firstOrCreate(
                [
                    'room_number' => $review['room_number'],
                    'rating' => $review['rating'],
                    'comment' => $review['comment'],
                ]
            );
        }
    }
}
