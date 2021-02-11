<?php

namespace App\Admin;


use App\Admin\Fields\Specifications;
use Arniro\Admin\Fields\BelongsTo;
use Arniro\Admin\Fields\HasMany;
use Arniro\Admin\Fields\Number;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Fields\Textarea;
use Arniro\Admin\Fields\Tiptap\Extensions\Divider;
use Arniro\Admin\Fields\Tiptap\Extensions\Headings;
use Arniro\Admin\Fields\Tiptap\Extensions\TextFormatting;
use Arniro\Admin\Fields\Tiptap\Tiptap;
use Arniro\Admin\Http\Resources\Resource;

class Product extends Resource
{
    public static $model = 'App\Product';
    public static $search = ['name'];
    public static $title = 'name';

    public function fields()
    {
        return [
            BelongsTo::make('Category', 'category', Category::class)
                ->hideFromIndex(),
            BelongsTo::make('Brand', 'brand', Brand::class),
            Text::make('Name', 'name')
                ->rules('required'),
            Tiptap::make('Description', 'des')
                ->rules('required')
                ->extensions(new Headings(), new TextFormatting(), new Divider())
                ->hideFromIndex(),
            Number::make('Cashback (%)', 'cashback')
                ->min(0)->max(100),
            Specifications::make('Specifications', 'specifications')
                ->disableStoring()->hideFromIndex(),
            HasMany::make('variations', 'App\Admin\Variation')
        ];
    }
}
