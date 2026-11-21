<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WifiSettingTranslation extends Model
{
    protected $fillable = [
        'wifi_setting_id',
        'language_code',
        'network_name',
        'instructions',
    ];

    public function wifiSetting()
    {
        return $this->belongsTo(WifiSetting::class);
    }
}