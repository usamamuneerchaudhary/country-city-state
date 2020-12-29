<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryPhoneCode extends Model
{
    protected $fillable = [
        'id', 'phone_code', 'intl_dialing_prefix', 'country_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
