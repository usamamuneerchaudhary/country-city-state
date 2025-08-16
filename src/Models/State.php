<?php

namespace UsamaMuneerChaudhary\CountryCityState\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class State extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id','country_id', 'name', 'status'
    ];
    
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
    
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
