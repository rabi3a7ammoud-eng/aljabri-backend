<?php

namespace Database\Seeders;

use App\Models\ReviewSetting;
use App\Models\ReviewSettingTranslation;
use Illuminate\Database\Seeder;

class ReviewSettingSeeder extends Seeder
{
    public function run(): void
    {
        $setting = ReviewSetting::firstOrCreate(
            ['google_review_url' => 'https://g.page/r/aljabri-hotel/review']
        );

        $translations = [
            'en' => [
                'title' => 'Rate Your Stay',
                'description' => 'We would love to hear about your experience and stay at Aljabri Hotel.',
            ],
            'ar' => [
                'title' => 'قيّم إقامتك',
                'description' => 'يسعدنا معرفة رأيك حول تجربتك وإقامتك في فندق الجابري.',
            ],
            'fr' => [
                'title' => 'Évaluez votre séjour',
                'description' => 'Nous serions ravis de connaître votre avis sur votre séjour à l\'hôtel Aljabri.',
            ],
            'id' => [
                'title' => 'Nilai Masa Menginap Anda',
                'description' => 'Kami senang mendengar pengalaman dan pendapat Anda selama menginap di Hotel Aljabri.',
            ],
            'tr' => [
                'title' => 'Konaklamanızı Değerlendirin',
                'description' => 'Aljabri Otel\'deki deneyiminiz ve konaklamanız hakkındaki görüşlerinizi duymaktan memnuniyet duyarız.',
            ],
            'uz' => [
                'title' => 'Turar joyingizni baholang',
                'description' => 'Aljabri mehmonxonasidagi tajribangiz va turar joyingiz haqidagi fikringizni bilishdan mamnun bo\'lamiz.',
            ],
        ];

        foreach ($translations as $lang => $translation) {
            ReviewSettingTranslation::updateOrCreate(
                [
                    'review_setting_id' => $setting->id,
                    'language_code' => $lang,
                ],
                [
                    'title' => $translation['title'],
                    'description' => $translation['description'],
                ]
            );
        }
    }
}
