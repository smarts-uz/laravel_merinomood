<?php

namespace App\Admin;


use Arniro\Admin\Fields\Custom;
use Arniro\Admin\Fields\HasMany;
use Arniro\Admin\Fields\Password;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Http\Requests\AdminRequest;
use Arniro\Admin\Http\Resources\Resource;
use App\User as UserModel;

class User extends Resource
{
    public static $model = UserModel::class;

    public static $search = ['name', 'email'];

    public static $title = 'name';

    public static $icon = 'user';

    public static $paginate = 25;

    protected static function indexQuery($query, AdminRequest $request)
    {
        return $query->with('address');
    }

    public function fields()
    {
        return [
            Text::make('Name', 'name')
                ->rules('required'),

			Text::make('Email', 'email')
                ->rules('required', 'email')
                ->creationRules('unique:users')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Password::make('Password', 'password')
                ->withConfirmation()
                ->rules('confirmed')
                ->creationRules('required'),

            Custom::make('Address', 'address')
                ->disableSaving()
                ->onlyAtDetail(),

            HasMany::make('points', 'App\Admin\Point')
        ];
    }
}
