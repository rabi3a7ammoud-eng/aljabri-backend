<?php

namespace App\Http\Controllers;

use App\Models\WifiSetting;
use App\Models\WifiSettingTranslation;
use Illuminate\Http\Request;

class WifiSettingTranslationController extends Controller
{
    public function index(WifiSetting $wifiSetting)
    {
        return response()->json([
            'data' => $wifiSetting->translations
        ]);
    }

    public function store(Request $request, WifiSetting $wifiSetting)
    {
        $validated = $request->validate([
            'language_code' => 'required|in:ar,en,fr,id,tr,uz',
            'network_name' => 'required|string|max:255',
            'instructions' => 'nullable|string',
        ]);

        $translation = WifiSettingTranslation::updateOrCreate(
            [
                'wifi_setting_id' => $wifiSetting->id,
                'language_code' => $validated['language_code'],
            ],
            [
                'network_name' => $validated['network_name'],
                'instructions' => $validated['instructions'] ?? null,
            ]
        );

        return response()->json([
            'message' => 'WiFi translation saved successfully',
            'data' => $translation
        ]);
    }
}