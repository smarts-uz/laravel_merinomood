<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = ['user_id', 'value', 'available', 'type', 'by', 'order_variation_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orderVariation()
    {
        return $this->belongsTo(OrderVariation::class, 'order_variation_id');
    }
}
