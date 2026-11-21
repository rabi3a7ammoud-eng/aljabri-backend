<?php

namespace App\Http\Controllers;

use App\Models\ReviewSetting;
use App\Models\ReviewSettingTranslation;
use Illuminate\Http\Request;

class ReviewSettingTranslationController extends Controller
{
    public function index(ReviewSetting $reviewSetting)
    {
        return response()->json([
            'data' => $reviewSetting->translations
        ]);
    }

    public function store(Request $request, ReviewSetting $reviewSetting)
    {
        $validated = $request->validate([
            'language_code' => 'required|in:ar,en,fr,id,tr,uz',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $translation = ReviewSettingTranslation::updateOrCreate(
            [
                'review_setting_id' => $reviewSetting->id,
                'language_code' => $validated['language_code'],
            ],
            [
                'title' => $validated['title'],
                'description' => $validated['description'] ?? null,
            ]
        );

        return response()->json([
            'message' => 'Review setting translation saved successfully',
            'data' => $translation
        ]);
    }
}