<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactTranslation extends Model
{
    protected $fillable = [
        'contact_id',
        'language_code',
        'department',
        'description',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}