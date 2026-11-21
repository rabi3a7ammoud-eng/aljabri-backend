
# Aljabri Guest Hotel – Backend

## Project Overview
نظام خلفي لإدارة خدمات نزلاء فندق الجابري، تم تطويره باستخدام Laravel وواجهات REST API.

يتيح النظام استقبال طلبات النزلاء وإدارة الخدمات والغرف وبيانات التواصل والواي فاي والتقييمات.

## Technologies
- Laravel
- PHP
- MySQL
- Laravel Sanctum
- REST API

## Main Features
- تسجيل دخول الإدارة وإدارة صلاحيات الوصول.
- استقبال طلبات خدمات الغرف.
- استقبال طلبات الكافيه والمغسلة وحساب إجمالي الأسعار من قاعدة البيانات.
- إدارة الخدمات والأسعار وحالة التفعيل.
- إدارة الغرف وإنشاء رموز QR.
- إدارة بيانات شبكة Wi-Fi وترجماتها.
- إدارة جهات الاتصال وترجماتها.
- إدارة إعدادات تقييم الفندق على Google Maps.
- دعم ست لغات: العربية والإنجليزية والفرنسية والإندونيسية والتركية والأوزبكية.

## Authentication
يستخدم النظام Laravel Sanctum لحماية مسارات الإدارة من خلال Bearer Token.

### Login Endpoint
POST /api/login

## API Endpoints

### Public Routes
| Method | Endpoint | Description |
|---|---|---|
| POST | /api/login | تسجيل الدخول |
| POST | /api/requests | إرسال طلب خدمة |
| POST | /api/orders | إرسال طلب كافيه أو مغسلة |

### Protected Routes
تتطلب رمز مصادقة Bearer Token.

| Method | Endpoint | Description |
|---|---|---|
| GET, POST, PUT, DELETE | /api/contacts | إدارة جهات الاتصال |
| GET, POST, PUT, DELETE | /api/orders | إدارة الطلبات |
| GET, POST, PUT, DELETE | /api/requests | إدارة طلبات الخدمات |
| GET, POST | /api/review-settings | إعدادات التقييم |
| GET, POST, PUT, DELETE | /api/rooms | إدارة الغرف |
| GET | /api/rooms/{id}/qr | إنشاء QR للغرفة |
| GET, POST, PUT, DELETE | /api/services | إدارة الخدمات |
| GET, POST | /api/wifi | إعدادات Wi-Fi |

## Supported Languages
- ar – Arabic
- en – English
- fr – French
- id – Indonesian
- tr – Turkish
- uz – Uzbek

## Project Setup

1. Install PHP, Composer and MySQL.
2. Install project dependencies:

```bash
composer install
```

3. Create a database for the project.
4. Configure the `.env` file with database credentials.
5. Generate the application key:

```bash
php artisan key:generate
```

6. Run database migrations and seeders:

```bash
php artisan migrate --seed
```

7. Start the Laravel development server:

```bash
php artisan serve
```

The API will be available at:

http://127.0.0.1:8000

## Notes
- The frontend is developed separately using Next.js.
- The backend provides REST API endpoints for frontend integration.
- The QR code currently uses a local frontend URL and must be updated before deployment.
- Demo credentials and sample data should be changed before production deployment.
