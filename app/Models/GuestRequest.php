<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestRequest extends Model
{
    protected $fillable = [
        'room_number',
        'service',
        'details',
        'status',
    ];
}
