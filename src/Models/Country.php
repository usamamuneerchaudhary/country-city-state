<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id', 'name', 'status','iso_code2', 'iso_code3', 'num_code'
    ];
    
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
