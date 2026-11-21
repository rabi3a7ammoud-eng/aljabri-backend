<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestRequestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HotelServiceController;
use App\Http\Controllers\WifiSettingController;
use App\Http\Controllers\HotelRoomController;
use App\Http\Controllers\RoomQrController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewSettingController;
use App\Http\Controllers\GuestOrderController;
use App\Http\Controllers\HotelServiceTranslationController;
use App\Http\Controllers\WifiSettingTranslationController;
use App\Http\Controllers\ContactTranslationController;
use App\Http\Controllers\ReviewSettingTranslationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Login
Route::post('/login', [AuthController::class, 'login']);

// Guest Requests
Route::post('/requests', [GuestRequestController::class, 'store']);

// Protected Routes
Route::post('/orders', [GuestOrderController::class, 'store']);
Route::middleware('auth:sanctum')->group(function () {
    // Hotel Service Translations
Route::get('/services/{hotelService}/translations', [HotelServiceTranslationController::class, 'index']);
Route::post('/services/{hotelService}/translations', [HotelServiceTranslationController::class, 'store']);
    // Guest Orders
Route::get('/orders', [GuestOrderController::class, 'index']);

Route::put('/orders/{guestOrder}', [GuestOrderController::class, 'update']);
Route::delete('/orders/{guestOrder}', [GuestOrderController::class, 'destroy']);
    // Review Settings
Route::get('/review-settings', [ReviewSettingController::class, 'index']);
Route::post('/review-settings', [ReviewSettingController::class, 'store']);
// Review Setting Translations
Route::get('/review-settings/{reviewSetting}/translations', [ReviewSettingTranslationController::class, 'index']);
Route::post('/review-settings/{reviewSetting}/translations', [ReviewSettingTranslationController::class, 'store']);

// Contacts
Route::get('/contacts', [ContactController::class, 'index']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::put('/contacts/{contact}', [ContactController::class, 'update']);
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']);
// Contact Translations
Route::get('/contacts/{contact}/translations', [ContactTranslationController::class, 'index']);
Route::post('/contacts/{contact}/translations', [ContactTranslationController::class, 'store']);

    // Guest Requests
    Route::get('/requests', [GuestRequestController::class, 'index']);
    Route::put('/requests/{guestRequest}', [GuestRequestController::class, 'update']);
    Route::delete('/requests/{guestRequest}', [GuestRequestController::class, 'destroy']);

    // Hotel Services
    Route::get('/services', [HotelServiceController::class, 'index']);
    Route::post('/services', [HotelServiceController::class, 'store']);
    Route::get('/services/{hotelService}', [HotelServiceController::class, 'show']);
    Route::put('/services/{hotelService}', [HotelServiceController::class, 'update']);
    Route::delete('/services/{hotelService}', [HotelServiceController::class, 'destroy']);
// WiFi Settings
Route::get('/wifi', [WifiSettingController::class, 'index']);
Route::post('/wifi', [WifiSettingController::class, 'store']);
// WiFi Translations
Route::get('/wifi/{wifiSetting}/translations', [WifiSettingTranslationController::class, 'index']);
Route::post('/wifi/{wifiSetting}/translations', [WifiSettingTranslationController::class, 'store']);
// Hotel Rooms
Route::get('/rooms', [HotelRoomController::class, 'index']);
Route::post('/rooms', [HotelRoomController::class, 'store']);
Route::get('/rooms/{hotelRoom}', [HotelRoomController::class, 'show']);
Route::put('/rooms/{hotelRoom}', [HotelRoomController::class, 'update']);
Route::delete('/rooms/{hotelRoom}', [HotelRoomController::class, 'destroy']);
Route::get('/rooms/{hotelRoom}/qr', [RoomQrController::class, 'generate']);
});