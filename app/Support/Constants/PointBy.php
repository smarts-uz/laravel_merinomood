<?php

namespace App\Support\Constants;

use Illuminate\Support\Arr;

class PointBy
{
    const ORDER = 'order';

    public static function all()
    {
        return [
            static::ORDER => 'Order',
        ];
    }

    public static function label($value)
    {
        return Arr::get(static::all(), $value);
    }
}
