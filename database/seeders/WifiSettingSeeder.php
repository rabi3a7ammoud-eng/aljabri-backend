<?php

namespace Database\Seeders;

use App\Models\WifiSetting;
use App\Models\WifiSettingTranslation;
use Illuminate\Database\Seeder;

class WifiSettingSeeder extends Seeder
{
    public function run(): void
    {
        $wifi = WifiSetting::updateOrCreate(
            ['network_name' => 'Aljabri-Guest-WiFi'],
            [
                'password' => 'Aljabri2026',
                'instructions' => 'Select the Aljabri-Guest-WiFi network and enter the password to enjoy complimentary high-speed internet.',
            ]
        );

        $translations = [
            'en' => [
                'network_name' => 'Aljabri-Guest-WiFi',
                'instructions' => 'Select the Aljabri-Guest-WiFi network and enter the password to enjoy complimentary high-speed internet.',
            ],
            'ar' => [
                'network_name' => 'Aljabri-Guest-WiFi',
                'instructions' => 'اختر شبكة Aljabri-Guest-WiFi وأدخل كلمة المرور للاستمتاع بإنترنت مجاني عالي السرعة.',
            ],
            'fr' => [
                'network_name' => 'Aljabri-Guest-WiFi',
                'instructions' => 'Sélectionnez le réseau Aljabri-Guest-WiFi et saisissez le mot de passe pour profiter du Wi-Fi haut débit gratuit.',
            ],
            'id' => [
                'network_name' => 'Aljabri-Guest-WiFi',
                'instructions' => 'Pilih jaringan Aljabri-Guest-WiFi dan masukkan kata sandi untuk menikmati internet berkecepatan tinggi gratis.',
            ],
            'tr' => [
                'network_name' => 'Aljabri-Guest-WiFi',
                'instructions' => 'Ücretsiz yüksek hızlı internetin keyfini çıkarmak için Aljabri-Guest-WiFi ağını seçin ve şifreyi girin.',
            ],
            'uz' => [
                'network_name' => 'Aljabri-Guest-WiFi',
                'instructions' => 'Bepul yuqori tezlikdagi internetdan foydalanish uchun Aljabri-Guest-WiFi tarmog\'ini tanlang va parolni kiriting.',
            ],
        ];

        foreach ($translations as $lang => $translation) {
            WifiSettingTranslation::updateOrCreate(
                [
                    'wifi_setting_id' => $wifi->id,
                    'language_code' => $lang,
                ],
                [
                    'network_name' => $translation['network_name'],
                    'instructions' => $translation['instructions'],
                ]
            );
        }
    }
}
