<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WifiSetting extends Model
{
    protected $fillable = [
        'network_name',
        'password',
        'instructions',
    ];

    public function translations()
    {
        return $this->hasMany(WifiSettingTranslation::class);
    }
}