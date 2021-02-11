<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VariationItem extends Model
{
    protected $fillable = ['variation_id', 'size', 'price', 'in_stock'];

    public function variation()
    {
        return $this->belongsTo(Variation::class, 'variation_id');
    }
}
