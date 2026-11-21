<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestOrder extends Model
{
    protected $fillable = [
        'room_number',
        'department',
        'items',
        'total_price',
        'notes',
        'status',
    ];

    protected $casts = [
        'items' => 'array',
        'total_price' => 'decimal:2',
    ];
}