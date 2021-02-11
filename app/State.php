<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function shippings()
    {
        return $this->hasMany(Shipping::class, 'state_id')->orderBy('type', 'desc');
    }
}
