<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            HotelRoomSeeder::class,
            HotelServiceSeeder::class,
            WifiSettingSeeder::class,
            ContactSeeder::class,
            ReviewSettingSeeder::class,
            GuestRequestSeeder::class,
            GuestOrderSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}
