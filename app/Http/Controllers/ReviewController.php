<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // عرض جميع التقييمات
    public function index()
    {
        return response()->json([
            'data' => Review::latest()->get()
        ]);
    }

    // حفظ تقييم جديد
    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_number' => 'required|string|max:10',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        $review = Review::create($validated);

        return response()->json([
            'message' => 'تم حفظ التقييم بنجاح',
            'data' => $review
        ], 201);
    }
}