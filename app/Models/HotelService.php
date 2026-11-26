<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelService extends Model
{
    protected $fillable = [
        'name',
        'category',
        'description',
        'price',
        'is_active',
    ];
protected $casts = [
    'is_active' => 'boolean',
    'price' => 'decimal:2',
];

    public function translations()
{
    return $this->hasMany(HotelServiceTranslation::class);
}
}