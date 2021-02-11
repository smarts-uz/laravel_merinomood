<?php

namespace App\Admin;


use Arniro\Admin\Fields\BelongsTo;
use Arniro\Admin\Fields\HasMany;
use Arniro\Admin\Fields\Image;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Fields\Textarea;
use Arniro\Admin\Http\Resources\Resource;

class Category extends Resource
{
    public static $model = 'App\Category';
    public static $search = ['name'];
    public static $title = 'name';

    public function fields()
    {
        $fields = [
            BelongsTo::make('Category', 'parent', Category::class)
                ->hideFromIndex(),
            Text::make('Name', 'name')
                ->rules('required'),
            Textarea::make('Description', 'des'),
            Image::make('Picture', 'image')
                ->rules('required_without:parent'),
        ];

        if(!$this->products()->count()){
            $fields[] = HasMany::make('categories', 'App\Admin\Category');
        }

        if(!$this->categories()->count()){
            $fields[] = HasMany::make('products', 'App\Admin\Product');
        }

        return $fields;
    }
}
