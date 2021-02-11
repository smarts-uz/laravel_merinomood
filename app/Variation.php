<?php

namespace App;

use Arniro\Admin\Media\HasMedia;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasMedia;

    public function name()
    {
        return $this->product->name . ($this->color ? ' (' . $this->color . ')' : '');
    }

    public function minPrice()
    {
        return $this->price ? '$' . $this->price : 'From $' . $this->minimumPrice;
    }

    public function path()
    {
        return url(sprintf('products/%s/%s', $this->product->slug, $this->sku));
    }

    public function scopeWithMinimumPrice($query)
    {
        $query->addSelect(['minimumPrice' => VariationItem::selectRaw('min(price)')
            ->whereColumn('variation_id', 'variations.id')
        ]);
    }

    public function scopeSimilar($query, $product)
    {
        return $query->withMinimumPrice()->whereHas('product', function ($query) use ($product){
            $query->where('category_id', $product->category_id);
        })
        ->where('product_id', '<>', $product->id)
        ->with('product');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function variationItems()
    {
        return $this->hasMany(VariationItem::class, 'variation_id');
    }
}
