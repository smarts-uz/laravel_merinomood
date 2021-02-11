<?php

namespace App\Support\Constants;

use Illuminate\Support\Arr;

class PointType
{
    const REWARD = 'reward';
    const WITHDRAW = 'withdraw';

    public static function all()
    {
        return [
            static::REWARD => 'Reward',
            static::WITHDRAW => 'Withdraw',
        ];
    }

    public static function label($value)
    {
        return Arr::get(static::all(), $value);
    }
}
