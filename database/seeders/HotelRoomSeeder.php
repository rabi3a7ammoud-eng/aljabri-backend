<?php

namespace Database\Seeders;

use App\Models\HotelRoom;
use Illuminate\Database\Seeder;

class HotelRoomSeeder extends Seeder
{
    public function run(): void
    {
        $rooms = [
            // Floor 1
            ['room_number' => '101', 'floor' => '1', 'is_active' => true],
            ['room_number' => '102', 'floor' => '1', 'is_active' => true],
            ['room_number' => '103', 'floor' => '1', 'is_active' => true],
            ['room_number' => '104', 'floor' => '1', 'is_active' => true],
            ['room_number' => '105', 'floor' => '1', 'is_active' => true],

            // Floor 2
            ['room_number' => '201', 'floor' => '2', 'is_active' => true],
            ['room_number' => '202', 'floor' => '2', 'is_active' => true],
            ['room_number' => '203', 'floor' => '2', 'is_active' => true],
            ['room_number' => '204', 'floor' => '2', 'is_active' => true],
            ['room_number' => '205', 'floor' => '2', 'is_active' => true],

            // Floor 3
            ['room_number' => '301', 'floor' => '3', 'is_active' => true],
            ['room_number' => '302', 'floor' => '3', 'is_active' => true],
            ['room_number' => '303', 'floor' => '3', 'is_active' => true],
            ['room_number' => '304', 'floor' => '3', 'is_active' => true],
            ['room_number' => '305', 'floor' => '3', 'is_active' => false],
        ];

        foreach ($rooms as $room) {
            HotelRoom::updateOrCreate(
                ['room_number' => $room['room_number']],
                [
                    'floor' => $room['floor'],
                    'is_active' => $room['is_active'],
                ]
            );
        }
    }
}
