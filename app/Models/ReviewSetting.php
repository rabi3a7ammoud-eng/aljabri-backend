<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewSetting extends Model
{
    protected $fillable = [
        'google_review_url',
    ];
    public function translations()
{
    return $this->hasMany(ReviewSettingTranslation::class);
}
}
