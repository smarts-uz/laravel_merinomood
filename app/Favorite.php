<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = ['user_id', 'variation_id', 'variation_item_id'];

    public function variation()
    {
        return $this->belongsTo(Variation::class, 'variation_id');
    }

    public function variationItem()
    {
        return $this->belongsTo(VariationItem::class, 'variation_item_id');
    }
}
