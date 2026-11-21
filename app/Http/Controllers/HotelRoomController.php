<?php

namespace App\Http\Controllers;

use App\Models\HotelRoom;
use Illuminate\Http\Request;

class HotelRoomController extends Controller
{
    // عرض جميع الغرف
    public function index()
    {
        return response()->json([
            'data' => HotelRoom::latest()->get()
        ]);
    }

    // إضافة غرفة جديدة
    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_number' => 'required|string|max:10|unique:hotel_rooms,room_number',
            'floor' => 'nullable|string|max:20',
            'is_active' => 'boolean',
        ]);

        $room = HotelRoom::create($validated);

        return response()->json([
            'message' => 'Room created successfully',
            'data' => $room
        ], 201);
    }

    // عرض غرفة واحدة
    public function show(HotelRoom $hotelRoom)
    {
        return response()->json([
            'data' => $hotelRoom
        ]);
    }

    // تعديل بيانات الغرفة
    public function update(Request $request, HotelRoom $hotelRoom)
    {
        $validated = $request->validate([
            'room_number' => 'sometimes|required|string|max:10|unique:hotel_rooms,room_number,' . $hotelRoom->id,
            'floor' => 'nullable|string|max:20',
            'is_active' => 'boolean',
        ]);

        $hotelRoom->update($validated);

        return response()->json([
            'message' => 'Room updated successfully',
            'data' => $hotelRoom
        ]);
    }

    // حذف غرفة
    public function destroy(HotelRoom $hotelRoom)
    {
        $hotelRoom->delete();

        return response()->json([
            'message' => 'Room deleted successfully'
        ]);
    }
}