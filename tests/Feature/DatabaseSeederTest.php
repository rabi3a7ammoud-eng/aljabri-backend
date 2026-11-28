<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\ContactTranslation;
use App\Models\GuestOrder;
use App\Models\GuestRequest;
use App\Models\HotelRoom;
use App\Models\HotelService;
use App\Models\HotelServiceTranslation;
use App\Models\Review;
use App\Models\ReviewSetting;
use App\Models\ReviewSettingTranslation;
use App\Models\User;
use App\Models\WifiSetting;
use App\Models\WifiSettingTranslation;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabaseSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_database_seeder_populates_all_tables_and_is_idempotent(): void
    {
        $this->seed(DatabaseSeeder::class);

        $firstRunCounts = [
            'users' => User::count(),
            'hotel_rooms' => HotelRoom::count(),
            'hotel_services' => HotelService::count(),
            'hotel_service_translations' => HotelServiceTranslation::count(),
            'wifi_settings' => WifiSetting::count(),
            'wifi_setting_translations' => WifiSettingTranslation::count(),
            'contacts' => Contact::count(),
            'contact_translations' => ContactTranslation::count(),
            'review_settings' => ReviewSetting::count(),
            'review_setting_translations' => ReviewSettingTranslation::count(),
            'guest_requests' => GuestRequest::count(),
            'guest_orders' => GuestOrder::count(),
            'reviews' => Review::count(),
        ];

        $this->assertSame(1, $firstRunCounts['users']);
        $this->assertSame(15, $firstRunCounts['hotel_rooms']);
        $this->assertSame(12, $firstRunCounts['hotel_services']);
        $this->assertSame(12 * 6, $firstRunCounts['hotel_service_translations']);
        $this->assertSame(1, $firstRunCounts['wifi_settings']);
        $this->assertSame(6, $firstRunCounts['wifi_setting_translations']);
        $this->assertSame(5, $firstRunCounts['contacts']);
        $this->assertSame(5 * 6, $firstRunCounts['contact_translations']);
        $this->assertSame(1, $firstRunCounts['review_settings']);
        $this->assertSame(6, $firstRunCounts['review_setting_translations']);
        $this->assertSame(4, $firstRunCounts['guest_requests']);
        $this->assertSame(4, $firstRunCounts['guest_orders']);
        $this->assertSame(5, $firstRunCounts['reviews']);

        // Every seeded guest order has at least one item and a positive total
        foreach (GuestOrder::all() as $order) {
            $this->assertNotEmpty($order->items);
            $this->assertGreaterThan(0, (float) $order->total_price);
        }

        // Re-running DatabaseSeeder should not duplicate any records
        $this->seed(DatabaseSeeder::class);

        $this->assertSame($firstRunCounts['users'], User::count());
        $this->assertSame($firstRunCounts['hotel_rooms'], HotelRoom::count());
        $this->assertSame($firstRunCounts['hotel_services'], HotelService::count());
        $this->assertSame($firstRunCounts['hotel_service_translations'], HotelServiceTranslation::count());
        $this->assertSame($firstRunCounts['wifi_settings'], WifiSetting::count());
        $this->assertSame($firstRunCounts['wifi_setting_translations'], WifiSettingTranslation::count());
        $this->assertSame($firstRunCounts['contacts'], Contact::count());
        $this->assertSame($firstRunCounts['contact_translations'], ContactTranslation::count());
        $this->assertSame($firstRunCounts['review_settings'], ReviewSetting::count());
        $this->assertSame($firstRunCounts['review_setting_translations'], ReviewSettingTranslation::count());
        $this->assertSame($firstRunCounts['guest_requests'], GuestRequest::count());
        $this->assertSame($firstRunCounts['guest_orders'], GuestOrder::count());
        $this->assertSame($firstRunCounts['reviews'], Review::count());
    }
}
