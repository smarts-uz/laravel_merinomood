<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function specifications()
    {
        return $this->hasMany(Specification::class, 'product_id')->orderBy('index', 'asc');
    }

    public function variations()
    {
        return $this->hasMany(Variation::class, 'product_id');
    }
}
