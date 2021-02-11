<?php

namespace App\Admin;


use App\Support\Constants\OrderStatus;
use Arniro\Admin\Fields\BelongsTo;
use Arniro\Admin\Fields\Boolean;
use Arniro\Admin\Fields\HasMany;
use Arniro\Admin\Fields\Number;
use Arniro\Admin\Fields\Select;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Http\Resources\Resource;

class Order extends Resource
{
    public static $model = 'App\Order';
    public static $search = ['index', 'name', 'phone'];
    public static $title = 'index';
    public static $icon = 'document';

    public function fields()
    {
        return [
            Text::make('Index', 'index')
                ->hideFromEdit()->disableSaving(),
            BelongsTo::make('User', 'user', User::class)
                ->hideFromIndex()->hideFromEdit()->disableSaving(),
            Text::make('Name', 'name')
                ->hideFromEdit()->disableSaving(),
            Text::make('Phone', 'phone')
                ->hideFromEdit()->disableSaving(),
            Text::make('State', 'state')
                ->hideFromEdit()->disableSaving(),
            Text::make('City', 'city')
                ->hideFromIndex()->hideFromEdit()->disableSaving(),
            Text::make('Address', 'address')
                ->hideFromIndex()->hideFromEdit()->disableSaving(),
            Text::make('Postcode', 'postcode')
                ->hideFromIndex()->hideFromEdit()->disableSaving(),
            Select::make('Status', 'status')
                ->options([
                    OrderStatus::NEW => [
                        'label' => OrderStatus::label(OrderStatus::NEW),
                        'color' => 'blue'
                    ],
                    OrderStatus::PENDING => [
                        'label' => OrderStatus::label(OrderStatus::PENDING),
                        'color' => 'orange'
                    ],
                    OrderStatus::COMPLETED => [
                        'label' => OrderStatus::label(OrderStatus::COMPLETED),
                        'color' => 'green'
                    ],
                    OrderStatus::CANCELLED => [
                        'label' => OrderStatus::label(OrderStatus::CANCELLED),
                        'color' => 'red'
                    ]
                ]),
            Boolean::make('Paid', 'paid'),
            Number::make('Amount', 'amount')
                ->hideFromEdit()->disableSaving(),
            HasMany::make('orderVariations', 'App\Admin\OrderVariation')
        ];
    }
}
