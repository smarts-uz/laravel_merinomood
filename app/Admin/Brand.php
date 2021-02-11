<?php

namespace App\Admin;


use Arniro\Admin\Fields\Image;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Http\Resources\Resource;

class Brand extends Resource
{
    public static $model = 'App\Brand';
    public static $search = ['name'];
    public static $title = 'name';
    public static $icon = 'tags';

    public function fields()
    {
        return [
            Text::make('Name', 'name')
                ->rules('required'),
            Image::make('Logo', 'logo')
                ->rules('required')
        ];
    }
}
