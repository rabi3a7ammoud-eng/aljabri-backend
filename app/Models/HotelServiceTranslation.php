<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelServiceTranslation extends Model
{
    protected $fillable = [
        'hotel_service_id',
        'language_code',
        'name',
        'description',
    ];

    public function hotelService()
    {
        return $this->belongsTo(HotelService::class);
    }
}