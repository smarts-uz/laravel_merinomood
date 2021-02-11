<?php

namespace App\Admin;

use Arniro\Admin\Fields\BelongsTo;
use Arniro\Admin\Fields\Image;
use Arniro\Admin\Fields\Number;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Http\Requests\AdminRequest;
use Arniro\Admin\Http\Resources\Resource;

class OrderVariation extends Resource
{
    public static $model = 'App\OrderVariation';
    public static $search = [];
    public static $icon = 'document';

    protected static function indexQuery($query, AdminRequest $request)
    {
        return $query->with('variation.product', 'variationItem');
    }

    public function fields()
    {
        return [
            BelongsTo::make('Order', 'order', Order::class)
                ->hideFromIndex(),
            BelongsTo::make('Product SKU', 'variation', Variation::class),
            Text::make('Product Name', 'name')
                ->resolveUsing(function (){
                    return $this->variation->name() . ' ' . optional($this->variationItem)->size;
                }),
            Image::make('Product Image', 'image')
                ->resolveUsing(function (){
                    return $this->variation->miniature;
                }),
            Number::make('Quantity', 'quantity'),
            Number::make('Sum', 'sum')
        ];
    }
}
