<?php

namespace App\Admin;


use App\Support\Constants\BannerType;
use Arniro\Admin\Fields\Image;
use Arniro\Admin\Fields\Select;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Fields\Textarea;
use Arniro\Admin\Http\Resources\Resource;

class Banner extends Resource
{
    public static $model = 'App\Banner';
    public static $search = ['type', 'title'];
    public static $title = 'title';
    public static $icon = 'photo';

    public function fields()
    {
        return [
            Select::make('Type', 'type')
                ->creationRules('required','unique:banners')
                ->updateRules('required','unique:banners,type,' . $this->id)
                ->options([
                    BannerType::POSTS => BannerType::label(BannerType::POSTS),
                ]),
            Image::make('Image', 'image')
                ->dir('banners')
                ->rules('required'),
            Text::make('Title', 'title'),
            Textarea::make('Description', 'des')->hideFromIndex(),
            Text::make('Link', 'link')->hideFromIndex(),
        ];
    }
}
