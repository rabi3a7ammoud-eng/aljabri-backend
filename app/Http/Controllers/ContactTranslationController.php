<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactTranslation;
use Illuminate\Http\Request;

class ContactTranslationController extends Controller
{
    public function index(Contact $contact)
    {
        return response()->json([
            'data' => $contact->translations
        ]);
    }

    public function store(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'language_code' => 'required|in:ar,en,fr,id,tr,uz',
            'department' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $translation = ContactTranslation::updateOrCreate(
            [
                'contact_id' => $contact->id,
                'language_code' => $validated['language_code'],
            ],
            [
                'department' => $validated['department'],
                'description' => $validated['description'] ?? null,
            ]
        );

        return response()->json([
            'message' => 'Contact translation saved successfully',
            'data' => $translation
        ]);
    }
}