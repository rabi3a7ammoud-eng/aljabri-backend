<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewSettingTranslation extends Model
{
    protected $fillable = [
        'review_setting_id',
        'language_code',
        'title',
        'description',
    ];

    public function reviewSetting()
    {
        return $this->belongsTo(ReviewSetting::class);
    }
}