<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'department',
        'phone',
        'description',
        'is_active',
    ];

    public function translations()
    {
        return $this->hasMany(ContactTranslation::class);
    }
}