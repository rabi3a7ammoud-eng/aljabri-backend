<?php

namespace Database\Seeders;

use App\Models\HotelService;
use App\Models\HotelServiceTranslation;
use Illuminate\Database\Seeder;

class HotelServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            // Cafe services (used by GuestOrder department: cafe)
            [
                'name' => 'Arabic Coffee',
                'category' => 'cafe',
                'description' => 'Traditional Arabic coffee served with dates.',
                'price' => 15.00,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Arabic Coffee', 'description' => 'Traditional Arabic coffee served with dates.'],
                    'ar' => ['name' => 'قهوة عربية', 'description' => 'قهوة عربية تقليدية تُقدم مع التمر.'],
                    'fr' => ['name' => 'Café arabe', 'description' => 'Café arabe traditionnel servi avec des dattes.'],
                    'id' => ['name' => 'Kopi Arab', 'description' => 'Kopi Arab tradisional disajikan dengan kurma.'],
                    'tr' => ['name' => 'Arap Kahvesi', 'description' => 'Hurma ile servis edilen geleneksel Arap kahvesi.'],
                    'uz' => ['name' => 'Arab qahvasi', 'description' => 'Xurmo bilan tortiladigan an\'anaviy arab qahvasi.'],
                ],
            ],
            [
                'name' => 'Turkish Coffee',
                'category' => 'cafe',
                'description' => 'Rich freshly brewed Turkish coffee.',
                'price' => 12.00,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Turkish Coffee', 'description' => 'Rich freshly brewed Turkish coffee.'],
                    'ar' => ['name' => 'قهوة تركية', 'description' => 'قهوة تركية غنية محضرة طازجة.'],
                    'fr' => ['name' => 'Café turc', 'description' => 'Café turc riche fraîchement préparé.'],
                    'id' => ['name' => 'Kopi Turki', 'description' => 'Kopi Turki kental yang baru diseduh.'],
                    'tr' => ['name' => 'Türk Kahvesi', 'description' => 'Taze demlenmiş zengin Türk kahvesi.'],
                    'uz' => ['name' => 'Turk qahvasi', 'description' => 'Yangi damlangan boy turk qahvasi.'],
                ],
            ],
            [
                'name' => 'Cappuccino',
                'category' => 'cafe',
                'description' => 'Espresso topped with steamed milk foam.',
                'price' => 18.00,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Cappuccino', 'description' => 'Espresso topped with steamed milk foam.'],
                    'ar' => ['name' => 'كابتشينو', 'description' => 'إسبريسو مع رغوة الحليب المبخر.'],
                    'fr' => ['name' => 'Cappuccino', 'description' => 'Expresso garni de mousse de lait chaud.'],
                    'id' => ['name' => 'Cappuccino', 'description' => 'Espresso dengan busa susu hangat.'],
                    'tr' => ['name' => 'Cappuccino', 'description' => 'Buharda ısıtılmış süt köpüklü espresso.'],
                    'uz' => ['name' => 'Kapuchino', 'description' => 'Bug\'da ko\'pirtirilgan sutli espresso.'],
                ],
            ],
            [
                'name' => 'Fresh Orange Juice',
                'category' => 'cafe',
                'description' => 'Chilled 100% freshly squeezed orange juice.',
                'price' => 16.00,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Fresh Orange Juice', 'description' => 'Chilled 100% freshly squeezed orange juice.'],
                    'ar' => ['name' => 'عصير برتقال طازج', 'description' => 'عصير برتقال طبيعي طازج ومبرد 100%.'],
                    'fr' => ['name' => 'Jus d\'orange frais', 'description' => 'Jus d\'orange frais 100 % pressé et rafraîchissant.'],
                    'id' => ['name' => 'Jus Jeruk Segar', 'description' => 'Jus jeruk peras segar 100% dingin.'],
                    'tr' => ['name' => 'Taze Portakal Suyu', 'description' => 'Soğuk %100 taze sıkılmış portakal suyu.'],
                    'uz' => ['name' => 'Yangi apelsin sharbati', 'description' => '100% yangi siqilgan salqin apelsin sharbati.'],
                ],
            ],
            [
                'name' => 'Club Sandwich',
                'category' => 'cafe',
                'description' => 'Toasted triple-decker sandwich served with fries.',
                'price' => 32.00,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Club Sandwich', 'description' => 'Toasted triple-decker sandwich served with fries.'],
                    'ar' => ['name' => 'كلوب ساندويتش', 'description' => 'ساندويتش محمص من ثلاث طبقات يُقدم مع البطاطس المقلية.'],
                    'fr' => ['name' => 'Club Sandwich', 'description' => 'Sandwich grillé à trois étages servi avec des frites.'],
                    'id' => ['name' => 'Club Sandwich', 'description' => 'Sandwich panggang tiga lapis disajikan dengan kentang goreng.'],
                    'tr' => ['name' => 'Kulüp Sandviç', 'description' => 'Patates kızartması ile servis edilen üç katlı tost sandviç.'],
                    'uz' => ['name' => 'Klab sendvich', 'description' => 'Kartoshka fri bilan tortiladigan uch qavatli qovurilgan sendvich.'],
                ],
            ],

            // Laundry services (used by GuestOrder department: laundry)
            [
                'name' => 'Shirt Wash & Iron',
                'category' => 'laundry',
                'description' => 'Professional washing and pressing for a single shirt.',
                'price' => 15.00,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Shirt Wash & Iron', 'description' => 'Professional washing and pressing for a single shirt.'],
                    'ar' => ['name' => 'غسيل وكي قميص', 'description' => 'غسيل وكي احترافي لقميص واحد.'],
                    'fr' => ['name' => 'Lavage et repassage de chemise', 'description' => 'Lavage et repassage professionnels pour une chemise.'],
                    'id' => ['name' => 'Cuci & Setrika Kemeja', 'description' => 'Pencucian dan penyetrikaan profesional untuk satu kemeja.'],
                    'tr' => ['name' => 'Gömlek Yıkama ve Ütü', 'description' => 'Tek gömlek için profesyonel yıkama ve ütüleme.'],
                    'uz' => ['name' => 'Ko\'ylak yuvish va dazmollash', 'description' => 'Bitta ko\'ylak uchun professional yuvish va dazmollash.'],
                ],
            ],
            [
                'name' => 'Thobe Wash & Press',
                'category' => 'laundry',
                'description' => 'Gentle wash and crisp pressing for a thobe.',
                'price' => 20.00,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Thobe Wash & Press', 'description' => 'Gentle wash and crisp pressing for a thobe.'],
                    'ar' => ['name' => 'غسيل وكي ثوب', 'description' => 'غسيل لطيف وكي متقن للثوب.'],
                    'fr' => ['name' => 'Lavage et repassage de thobe', 'description' => 'Lavage délicat et repassage soigné pour un thobe.'],
                    'id' => ['name' => 'Cuci & Setrika Gamis/Thobe', 'description' => 'Pencucian lembut dan penyetrikaan rapi untuk thobe.'],
                    'tr' => ['name' => 'Cübbe Yıkama ve Ütü', 'description' => 'Hassas yıkama ve özenli ütüleme hizmeti.'],
                    'uz' => ['name' => 'Savb yuvish va dazmollash', 'description' => 'Savb uchun ehtiyotkor yuvish va sifatli dazmollash.'],
                ],
            ],
            [
                'name' => 'Suit Dry Cleaning',
                'category' => 'laundry',
                'description' => 'Complete dry cleaning for a two-piece suit.',
                'price' => 45.00,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Suit Dry Cleaning', 'description' => 'Complete dry cleaning for a two-piece suit.'],
                    'ar' => ['name' => 'تنظيف جاف لبدلة', 'description' => 'تنظيف جاف كامل لبدلة من قطعتين.'],
                    'fr' => ['name' => 'Nettoyage à sec de costume', 'description' => 'Nettoyage à sec complet pour un costume deux pièces.'],
                    'id' => ['name' => 'Dry Cleaning Jas', 'description' => 'Dry cleaning lengkap untuk setelan jas dua potong.'],
                    'tr' => ['name' => 'Takım Elbise Kuru Temizleme', 'description' => 'İki parçalı takım elbise için tam kuru temizleme.'],
                    'uz' => ['name' => 'Kostyum kimyoviy tozalash', 'description' => 'Ikki qismli kostyum uchun to\'liq kimyoviy tozalash.'],
                ],
            ],
            [
                'name' => 'Express Laundry Service',
                'category' => 'laundry',
                'description' => 'Same-day express wash and fold within 4 hours.',
                'price' => 35.00,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Express Laundry Service', 'description' => 'Same-day express wash and fold within 4 hours.'],
                    'ar' => ['name' => 'خدمة غسيل سريعة', 'description' => 'غسيل وطي سريع في نفس اليوم خلال 4 ساعات.'],
                    'fr' => ['name' => 'Service de blanchisserie express', 'description' => 'Lavage et pliage express le jour même sous 4 heures.'],
                    'id' => ['name' => 'Layanan Laundry Ekspres', 'description' => 'Cuci dan lipat ekspres di hari yang sama dalam 4 jam.'],
                    'tr' => ['name' => 'Ekspres Çamaşırhane Hizmeti', 'description' => '4 saat içinde aynı gün ekspres yıkama ve katlama.'],
                    'uz' => ['name' => 'Tezkor kir yuvish xizmati', 'description' => '4 soat ichida o\'sha kunning o\'zida yuvish va taxlash.'],
                ],
            ],

            // Housekeeping & Concierge services
            [
                'name' => 'Room Cleaning',
                'category' => 'housekeeping',
                'description' => 'Complimentary daily room cleaning and bed making.',
                'price' => null,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Room Cleaning', 'description' => 'Complimentary daily room cleaning and bed making.'],
                    'ar' => ['name' => 'تنظيف الغرفة', 'description' => 'تنظيف يومي مجاني للغرفة وترتيب السرير.'],
                    'fr' => ['name' => 'Nettoyage de chambre', 'description' => 'Nettoyage quotidien gratuit de la chambre et réfection du lit.'],
                    'id' => ['name' => 'Pembersihan Kamar', 'description' => 'Pembersihan kamar harian gratis dan perapian tempat tidur.'],
                    'tr' => ['name' => 'Oda Temizliği', 'description' => 'Ücretsiz günlük oda temizliği ve yatak düzenleme.'],
                    'uz' => ['name' => 'Xonani tozalash', 'description' => 'Bepul kunlik xona tozalash va karavotni tartibga solish.'],
                ],
            ],
            [
                'name' => 'Extra Towels & Pillows',
                'category' => 'housekeeping',
                'description' => 'Fresh bath towels and extra pillows delivered to your room.',
                'price' => null,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Extra Towels & Pillows', 'description' => 'Fresh bath towels and extra pillows delivered to your room.'],
                    'ar' => ['name' => 'مناشف ووسائد إضافية', 'description' => 'مناشف استحمام نظيفة ووسائد إضافية تُوصل إلى غرفتك.'],
                    'fr' => ['name' => 'Serviettes et oreillers supplémentaires', 'description' => 'Serviettes de bain propres et oreillers supplémentaires livrés dans votre chambre.'],
                    'id' => ['name' => 'Handuk & Bantal Tambahan', 'description' => 'Handuk mandi bersih dan bantal tambahan diantar ke kamar Anda.'],
                    'tr' => ['name' => 'Ekstra Havlu ve Yastık', 'description' => 'Odanıza teslim edilen temiz banyo havluları ve ekstra yastıklar.'],
                    'uz' => ['name' => 'Qo\'shimcha sochiq va yostiqlar', 'description' => 'Xonangizga yetkazib beriladigan toza sochiqlar va qo\'shimcha yostiqlar.'],
                ],
            ],
            [
                'name' => 'Airport Transfer',
                'category' => 'concierge',
                'description' => 'Private sedan transfer to or from the airport.',
                'price' => 120.00,
                'is_active' => true,
                'translations' => [
                    'en' => ['name' => 'Airport Transfer', 'description' => 'Private sedan transfer to or from the airport.'],
                    'ar' => ['name' => 'توصيل المطار', 'description' => 'سيارة خاصة للتوصيل من وإلى المطار.'],
                    'fr' => ['name' => 'Transfert aéroport', 'description' => 'Transfert privé en berline depuis ou vers l\'aéroport.'],
                    'id' => ['name' => 'Antar-Jemput Bandara', 'description' => 'Layanan antar-jemput mobil pribadi dari atau ke bandara.'],
                    'tr' => ['name' => 'Havaalanı Transferi', 'description' => 'Havaalanına veya havaalanından özel araç transferi.'],
                    'uz' => ['name' => 'Aeroport transferi', 'description' => 'Aeroportga yoki aeroportdan shaxsiy avtomobil transferi.'],
                ],
            ],
        ];

        foreach ($services as $item) {
            $translations = $item['translations'];
            unset($item['translations']);

            $service = HotelService::updateOrCreate(
                [
                    'name' => $item['name'],
                    'category' => $item['category'],
                ],
                [
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'is_active' => $item['is_active'],
                ]
            );

            foreach ($translations as $lang => $translation) {
                HotelServiceTranslation::updateOrCreate(
                    [
                        'hotel_service_id' => $service->id,
                        'language_code' => $lang,
                    ],
                    [
                        'name' => $translation['name'],
                        'description' => $translation['description'],
                    ]
                );
            }
        }
    }
}
