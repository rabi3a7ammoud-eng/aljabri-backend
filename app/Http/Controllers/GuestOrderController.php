<?php
namespace App\Http\Controllers;

use App\Models\GuestOrder;
use App\Models\HotelService;
use Illuminate\Http\Request;

class GuestOrderController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => GuestOrder::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_number' => 'required|string|max:10',
            'department' => 'required|in:cafe,laundry',
            'items' => 'required|array|min:1',
            'items.*.name' => 'required|string',
            'items.*.quantity' => 'required|integer|min:1',
            'notes' => 'nullable|string',
        ]);

        $totalPrice = 0;
        $orderItems = [];

        foreach ($validated['items'] as $item) {
            $service = HotelService::where('name', $item['name'])
                ->where('category', $validated['department'])
                ->where('is_active', true)
                ->first();

            if (!$service) {
                return response()->json([
                    'message' => 'Product not found'
                ], 422);
            }

            $subtotal = $service->price * $item['quantity'];
            $totalPrice += $subtotal;

            $orderItems[] = [
                'name' => $service->name,
                'quantity' => $item['quantity'],
                'price' => $service->price,
                'subtotal' => $subtotal,
            ];
        }

        $order = GuestOrder::create([
            'room_number' => $validated['room_number'],
            'department' => $validated['department'],
            'items' => $orderItems,
            'total_price' => $totalPrice,
            'notes' => $validated['notes'] ?? null,
        ]);

        return response()->json([
            'message' => 'Order created successfully',
            'data' => $order
        ], 201);
    }

    public function update(Request $request, GuestOrder $guestOrder)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,in_progress,completed,cancelled',
        ]);

        $guestOrder->update($validated);

        return response()->json([
            'message' => 'Order status updated successfully',
            'data' => $guestOrder
        ]);
    }

    public function destroy(GuestOrder $guestOrder)
    {
        $guestOrder->delete();

        return response()->json([
            'message' => 'Order deleted successfully'
        ]);
    }
}
