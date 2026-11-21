<?php

namespace App\Http\Controllers;

use App\Models\HotelService;
use App\Models\HotelServiceTranslation;
use Illuminate\Http\Request;

class HotelServiceTranslationController extends Controller
{
    public function index(HotelService $hotelService)
    {
        return response()->json([
            'data' => $hotelService->translations
        ]);
    }

    public function store(Request $request, HotelService $hotelService)
    {
        $validated = $request->validate([
            'language_code' => 'required|in:ar,en,fr,id,tr,uz',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $translation = HotelServiceTranslation::updateOrCreate(
            [
                'hotel_service_id' => $hotelService->id,
                'language_code' => $validated['language_code'],
            ],
            [
                'name' => $validated['name'],
                'description' => $validated['description'] ?? null,
            ]
        );

        return response()->json([
            'message' => 'Translation saved successfully',
            'data' => $translation
        ]);
    }
}