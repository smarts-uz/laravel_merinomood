<?php

namespace App\Admin;


use App\Admin\Fields\VariationItems;
use Arniro\Admin\Fields\BelongsTo;
use Arniro\Admin\Fields\Boolean;
use Arniro\Admin\Fields\Gallery;
use Arniro\Admin\Fields\Image;
use Arniro\Admin\Fields\Number;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Http\Resources\Resource;

class Variation extends Resource
{
    public static $model = 'App\Variation';
    public static $search = ['sku', 'color'];
    public static $title = 'sku';

    public function fields()
    {
        return [
            BelongsTo::make('Product', 'product', Product::class)
                ->hideFromIndex(),
            Text::make('Sku', 'sku')
                ->disableUpdating()->hideFromCreate()->hideFromEdit(),
            Image::make('Miniature', 'miniature')
                ->rules('required'),
            Text::make('Color', 'color'),
            Gallery::make('Gallery', 'media'),
            Number::make('Price', 'price')->step(0.01),
            Number::make('In stock', 'in_stock'),
            Boolean::make('Popular', 'popular'),
            VariationItems::make('Items', 'variationItems')
                ->disableStoring()->hideFromIndex()
        ];
    }
}
