<?php

namespace App\Http\Controllers;

use App\Models\GuestRequest;
use Illuminate\Http\Request;

class GuestRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    return response()->json([
        'data' => GuestRequest::latest()->get()
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $validated = $request->validate([
        'room_number' => 'required|string|max:10',
        'service' => 'required|string|max:50',
        'details' => 'nullable|string|max:1000',
    ]);

    $guestRequest = GuestRequest::create($validated);

    return response()->json([
        'message' => 'Request received successfully',
        'data' => $guestRequest
    ], 201);
}

    /**
     * Display the specified resource.
     */
    public function show(GuestRequest $guestRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuestRequest $guestRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GuestRequest $guestRequest)
{
    $validated = $request->validate([
        'status' => 'required|in:pending,in_progress,completed',
    ]);

    $guestRequest->update($validated);

    return response()->json([
        'message' => 'Request status updated successfully',
        'data' => $guestRequest
    ]);
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(GuestRequest $guestRequest)
{
    $guestRequest->delete();

    return response()->json([
        'message' => 'Request deleted successfully'
    ]);
}
}
