<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderVariation extends Model
{
    protected $fillable = ['order_id', 'variation_id', 'variation_item_id', 'quantity', 'sum'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function variation()
    {
        return $this->belongsTo(Variation::class, 'variation_id');
    }

    public function variationItem()
    {
        return $this->belongsTo(VariationItem::class, 'variation_item_id');
    }

    public function points()
    {
        return $this->hasMany(Point::class, 'order_variation_id');
    }

    public function applyCashback()
    {
        if ($this->variation->product->cashback) {
            $point = round(($this->sum * $this->variation->product->cashback) / 100, 2);
            $this->order->user->addOrderVariationPoint($this->id, $point);
        }
    }
}
