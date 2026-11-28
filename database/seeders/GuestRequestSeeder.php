<?php

namespace Database\Seeders;

use App\Models\GuestRequest;
use Illuminate\Database\Seeder;

class GuestRequestSeeder extends Seeder
{
    public function run(): void
    {
        $requests = [
            [
                'room_number' => '101',
                'service' => 'housekeeping',
                'details' => 'Please clean the room after 2:00 PM.',
                'status' => 'pending',
            ],
            [
                'room_number' => '104',
                'service' => 'extra_towels',
                'details' => 'Two extra bath towels and one extra pillow, please.',
                'status' => 'in_progress',
            ],
            [
                'room_number' => '202',
                'service' => 'maintenance',
                'details' => 'Air conditioning remote needs new batteries.',
                'status' => 'completed',
            ],
            [
                'room_number' => '301',
                'service' => 'wake_up_call',
                'details' => 'Wake-up call at 5:30 AM tomorrow.',
                'status' => 'pending',
            ],
        ];

        foreach ($requests as $request) {
            GuestRequest::firstOrCreate(
                [
                    'room_number' => $request['room_number'],
                    'service' => $request['service'],
                    'details' => $request['details'],
                ],
                [
                    'status' => $request['status'],
                ]
            );
        }
    }
}

