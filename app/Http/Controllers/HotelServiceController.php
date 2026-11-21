<?php

namespace App\Http\Controllers;

use App\Models\HotelService;
use Illuminate\Http\Request;

class HotelServiceController extends Controller
{
    // عرض الخدمات
    public function index()
    {
        return response()->json([
            'data' => HotelService::latest()->get()
        ]);
    }

    // إضافة خدمة جديدة
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:50',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
        ]);

        $service = HotelService::create($validated);

        return response()->json([
            'message' => 'Service created successfully',
            'data' => $service
        ], 201);
    }

    // عرض خدمة واحدة
    public function show(HotelService $hotelService)
    {
        return response()->json([
            'data' => $hotelService
        ]);
    }

    // تعديل خدمة
    public function update(Request $request, HotelService $hotelService)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'category' => 'sometimes|required|string|max:50',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
        ]);

        $hotelService->update($validated);

        return response()->json([
            'message' => 'Service updated successfully',
            'data' => $hotelService
        ]);
    }

    // حذف خدمة
    public function destroy(HotelService $hotelService)
    {
        $hotelService->delete();

        return response()->json([
            'message' => 'Service deleted successfully'
        ]);
    }
}