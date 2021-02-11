<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id', 'phone', 'country', 'state_id', 'city', 'address', 'postcode'];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
