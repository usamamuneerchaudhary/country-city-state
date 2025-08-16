<?php

namespace UsamaMuneerChaudhary\CountryCityState\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id','state_id', 'name', 'status'
    ];
    
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
