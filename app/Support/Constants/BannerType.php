<?php


namespace App\Support\Constants;


use Illuminate\Support\Arr;

class BannerType
{
    const POSTS = 'posts';

    public static function all()
    {
        return [
            static::POSTS => 'Posts',
        ];
    }

    public static function label($value)
    {
        return Arr::get(static::all(), $value);
    }
}
