<?php

namespace App\Admin;


use App\Admin\Fields\Shippings;
use Arniro\Admin\Fields\Number;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Http\Resources\Resource;

class State extends Resource
{
    public static $model = 'App\State';
    public static $search = ['name'];
    public static $title = 'name';
    public static $icon = 'location';

    public function fields()
    {
        return [
            Text::make('Name', 'name')
                ->rules('required'),
            Number::make('Tax (%)', 'tax')
                ->rules('required'),
            Shippings::make('Shippings', 'shippings')
                ->disableStoring()->hideFromIndex(),
        ];
    }
}
