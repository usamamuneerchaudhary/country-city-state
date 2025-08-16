<?php

namespace UsamaMuneerChaudhary\CountryCityState\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CountryPhoneCode extends Model
{
    protected $fillable = [
        'id', 'phone_code', 'intl_dialing_prefix', 'country_id'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
