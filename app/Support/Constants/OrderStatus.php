<?php


namespace App\Support\Constants;


use Illuminate\Support\Arr;

class OrderStatus
{
    const NEW = 'new';
    const PENDING = 'pending';
    const COMPLETED = 'completed';
    const CANCELLED = 'cancelled';

    public static function all()
    {
        return [
            static::NEW => 'New',
            static::PENDING => 'Pending',
            static::COMPLETED => 'Completed',
            static::CANCELLED => 'Cancelled',
        ];
    }

    public static function label($value)
    {
        return Arr::get(static::all(), $value);
    }
}
