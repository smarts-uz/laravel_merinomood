<?php

namespace App\Admin;


use App\Support\Constants\PointBy;
use App\Support\Constants\PointType;
use Arniro\Admin\Fields\BelongsTo;
use Arniro\Admin\Fields\Boolean;
use Arniro\Admin\Fields\Custom;
use Arniro\Admin\Fields\Number;
use Arniro\Admin\Fields\Select;
use Arniro\Admin\Http\Requests\AdminRequest;
use Arniro\Admin\Http\Resources\Resource;

class Point extends Resource
{
    public static $model = 'App\Point';
    public static $icon = 'wallet';

    protected static function indexQuery($query, AdminRequest $request)
    {
        $query->with('orderVariation.variation.product', 'orderVariation.variationItem');
    }

    public function fields()
    {
        return [
            BelongsTo::make('User', 'user', User::class)
                ->hideFromIndex(),
            Number::make('Value', 'value'),
            Boolean::make('Available', 'available'),
            Select::make('Type', 'type')
                ->options([
                    PointType::REWARD => [
                        'label' => PointType::label(PointType::REWARD),
                        'color' => 'green'
                    ],
                    PointType::WITHDRAW => [
                        'label' => PointType::label(PointType::WITHDRAW),
                        'color' => 'red'
                    ],
                ]),
            Select::make('By', 'by')
                ->options([
                    PointBy::ORDER => [
                        'label' => PointBy::label(PointBy::ORDER)
                    ]
                ]),
            Custom::make('Variation', 'variation')
                ->resolveUsing(function (){
                    if($this->order_variation_id){
                        return [
                            'label' => $this->orderVariation->variation->name() . ' ' . optional($this->orderVariation->variationItem)->size,
                            'link' => '/order-variations/' . $this->orderVariation->id
                        ];
                    }
                })
        ];
    }
}
