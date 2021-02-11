<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['index', 'user_id', 'email', 'name', 'phone', 'state', 'city', 'address', 'postcode', 'status', 'paid', 'amount'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orderVariations()
    {
        return $this->hasMany(OrderVariation::class, 'order_id');
    }
}
