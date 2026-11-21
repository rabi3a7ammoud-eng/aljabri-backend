<?php

namespace App\Http\Controllers;

use App\Models\ReviewSetting;
use Illuminate\Http\Request;

class ReviewSettingController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => ReviewSetting::latest()->first()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'google_review_url' => 'required|url|max:2048',
        ]);

        $setting = ReviewSetting::create($validated);

        return response()->json([
            'message' => 'Review link saved successfully',
            'data' => $setting
        ], 201);
    }
}