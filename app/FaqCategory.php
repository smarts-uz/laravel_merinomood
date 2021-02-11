<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
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

    public function questions()
    {
        return $this->hasMany(Question::class, 'faq_category_id');
    }

    public function path()
    {
        return "/faq/$this->slug";
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
