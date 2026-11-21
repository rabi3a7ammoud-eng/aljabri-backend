<?php

namespace App\Http\Controllers;

use App\Models\WifiSetting;
use Illuminate\Http\Request;

class WifiSettingController extends Controller
{
    // عرض إعدادات الواي فاي
    public function index()
    {
        return response()->json([
            'data' => WifiSetting::latest()->first()
        ]);
    }

    // حفظ إعدادات الواي فاي
    public function store(Request $request)
    {
        $validated = $request->validate([
            'network_name' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'instructions' => 'nullable|string',
        ]);

        $wifi = WifiSetting::create($validated);

        return response()->json([
            'message' => 'WiFi settings saved successfully',
            'data' => $wifi
        ], 201);
    }
}