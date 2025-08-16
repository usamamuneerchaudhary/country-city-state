<?php

namespace UsamaMuneerChaudhary\CountryCityState\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id', 'name', 'status','iso_code2', 'iso_code3', 'num_code'
    ];
    
    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }
}
