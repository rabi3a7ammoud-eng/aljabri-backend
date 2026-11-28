<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\ContactTranslation;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        $contacts = [
            [
                'department' => 'Reception',
                'phone' => '+966 11 000 0100',
                'description' => '24/7 front desk assistance, check-in, check-out, and general inquiries.',
                'is_active' => true,
                'translations' => [
                    'en' => ['department' => 'Reception', 'description' => '24/7 front desk assistance, check-in, check-out, and general inquiries.'],
                    'ar' => ['department' => 'الاستقبال', 'description' => 'خدمة مكتب الاستقبال على مدار الساعة لتسجيل الدخول والمغادرة والاستفسارات العامة.'],
                    'fr' => ['department' => 'Réception', 'description' => 'Assistance 24h/24, enregistrement, départ et renseignements généraux.'],
                    'id' => ['department' => 'Resepsionis', 'description' => 'Layanan meja depan 24/7, check-in, check-out, dan pertanyaan umum.'],
                    'tr' => ['department' => 'Resepsiyon', 'description' => '7/24 ön büro desteği, giriş, çıkış ve genel sorular.'],
                    'uz' => ['department' => 'Qabulxona', 'description' => '24/7 qabulxona yordami, ro\'yxatdan o\'tish, chiqish va umumiy savollar.'],
                ],
            ],
            [
                'department' => 'Housekeeping',
                'phone' => '+966 11 000 0101',
                'description' => 'Room cleaning, extra towels, pillows, and in-room amenities.',
                'is_active' => true,
                'translations' => [
                    'en' => ['department' => 'Housekeeping', 'description' => 'Room cleaning, extra towels, pillows, and in-room amenities.'],
                    'ar' => ['department' => 'تدبير الغرف', 'description' => 'تنظيف الغرف، المناشف الإضافية، الوسائد، ومستلزمات الغرفة.'],
                    'fr' => ['department' => 'Service d\'étage', 'description' => 'Nettoyage des chambres, serviettes, oreillers et articles de toilette.'],
                    'id' => ['department' => 'Housekeeping', 'description' => 'Pembersihan kamar, handuk tambahan, bantal, dan perlengkapan kamar.'],
                    'tr' => ['department' => 'Kat Hizmetleri', 'description' => 'Oda temizliği, ekstra havlu, yastık ve oda malzemeleri.'],
                    'uz' => ['department' => 'Xonalarni tozalash', 'description' => 'Xona tozalash, qo\'shimcha sochiqlar, yostiqlar va xona jihozlari.'],
                ],
            ],
            [
                'department' => 'Room Service & Cafe',
                'phone' => '+966 11 000 0102',
                'description' => 'In-room dining, hot beverages, snacks, and refreshments.',
                'is_active' => true,
                'translations' => [
                    'en' => ['department' => 'Room Service & Cafe', 'description' => 'In-room dining, hot beverages, snacks, and refreshments.'],
                    'ar' => ['department' => 'خدمة الغرف والمقهى', 'description' => 'توصيل الطعام للغرف، المشروبات الساخنة، والوجبات الخفيفة.'],
                    'fr' => ['department' => 'Room Service et Café', 'description' => 'Repas en chambre, boissons chaudes, collations et rafraîchissements.'],
                    'id' => ['department' => 'Layanan Kamar & Kafe', 'description' => 'Makanan di kamar, minuman hangat, camilan, dan minuman segar.'],
                    'tr' => ['department' => 'Oda Servisi ve Kafe', 'description' => 'Odaya yemek servisi, sıcak içecekler ve atıştırmalıklar.'],
                    'uz' => ['department' => 'Xona xizmati va kafe', 'description' => 'Xonaga ovqat yetkazib berish, issiq ichimliklar va yeguliklar.'],
                ],
            ],
            [
                'department' => 'Laundry',
                'phone' => '+966 11 000 0103',
                'description' => 'Washing, pressing, and dry cleaning services.',
                'is_active' => true,
                'translations' => [
                    'en' => ['department' => 'Laundry', 'description' => 'Washing, pressing, and dry cleaning services.'],
                    'ar' => ['department' => 'المغسلة', 'description' => 'خدمات الغسيل والكي والتنظيف الجاف.'],
                    'fr' => ['department' => 'Blanchisserie', 'description' => 'Services de lavage, repassage et nettoyage à sec.'],
                    'id' => ['department' => 'Laundry', 'description' => 'Layanan cuci, setrika, dan dry cleaning.'],
                    'tr' => ['department' => 'Çamaşırhane', 'description' => 'Yıkama, ütüleme ve kuru temizleme hizmetleri.'],
                    'uz' => ['department' => 'Kir yuvish xizmati', 'description' => 'Yuvish, dazmollash va kimyoviy tozalash xizmatlari.'],
                ],
            ],
            [
                'department' => 'Security & Emergency',
                'phone' => '+966 11 000 0911',
                'description' => 'Immediate 24/7 security and emergency assistance.',
                'is_active' => true,
                'translations' => [
                    'en' => ['department' => 'Security & Emergency', 'description' => 'Immediate 24/7 security and emergency assistance.'],
                    'ar' => ['department' => 'الأمن والطوارئ', 'description' => 'مساعدة فورية للأمن والطوارئ على مدار الساعة.'],
                    'fr' => ['department' => 'Sécurité et Urgences', 'description' => 'Assistance immédiate de sécurité et d\'urgence 24h/24.'],
                    'id' => ['department' => 'Keamanan & Darurat', 'description' => 'Bantuan keamanan dan darurat segera 24/7.'],
                    'tr' => ['department' => 'Güvenlik ve Acil Durum', 'description' => '7/24 acil güvenlik ve yardım desteği.'],
                    'uz' => ['department' => 'Xavfsizlik va favqulodda yordam', 'description' => '24/7 tezkor xavfsizlik va favqulodda yordam.'],
                ],
            ],
        ];

        foreach ($contacts as $item) {
            $translations = $item['translations'];
            unset($item['translations']);

            $contact = Contact::updateOrCreate(
                ['department' => $item['department']],
                [
                    'phone' => $item['phone'],
                    'description' => $item['description'],
                    'is_active' => $item['is_active'],
                ]
            );

            foreach ($translations as $lang => $translation) {
                ContactTranslation::updateOrCreate(
                    [
                        'contact_id' => $contact->id,
                        'language_code' => $lang,
                    ],
                    [
                        'department' => $translation['department'],
                        'description' => $translation['description'],
                    ]
                );
            }
        }
    }
}
