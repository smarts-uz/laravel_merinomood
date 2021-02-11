<?php


namespace App\Http\Livewire\Casts;


use Carbon\Carbon;
use Livewire\Castable;

class SeparateDate implements Castable
{
    public function cast($value)
    {
        if (! array_filter($value))
            return null;

        return Carbon::createFromDate($value['year'], $value['month'], $value['day']);
    }

    public function uncast($value)
    {
        return [
            'day' => optional($value)->day,
            'month' => optional($value)->month,
            'year' => optional($value)->year,
        ];
    }
}
