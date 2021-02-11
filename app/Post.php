<?php

namespace App;

use Arniro\Admin\Media\HasMedia;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable, HasMedia;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * If post was created less than 24 hours ago, returns in format "time ago",
     * else returns in format "Jan 5, 2017".
     *
     * @return string
     */
    public function creationTime()
    {
        return $this->created_at
            ? $this->created_at->addDay()->isPast()
                ? $this->created_at->isoFormat('ll')
                : $this->created_at->diffForHumans()
            : null;
    }
}
