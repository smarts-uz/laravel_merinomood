<?php

namespace App\Admin;


use Arniro\Admin\Fields\Gallery;
use Arniro\Admin\Fields\Image;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Fields\Tiptap\Extensions\Divider;
use Arniro\Admin\Fields\Tiptap\Extensions\Headings;
use Arniro\Admin\Fields\Tiptap\Extensions\TextFormatting;
use Arniro\Admin\Fields\Tiptap\Tiptap;
use Arniro\Admin\Http\Resources\Resource;

class Post extends Resource
{
    public static $model = 'App\Post';
    public static $search = ['title'];
    public static $title = 'title';
    public static $icon = 'blog';

    public static function label()
    {
        return 'Посты';
    }
    public function fields()
    {
        return [
            Text::make('Заголовок', 'title')
                ->rules('required'),
            Image::make('Миниатюра', 'miniature')
                ->rules('required')
                ->dir('posts/miniatures'),
            Image::make('Баннер', 'banner')
                ->rules('required')
                ->dir('posts/banners'),
            Text::make('Описание', 'des'),
            Tiptap::make('Контент', 'content')
                ->extensions(new Headings(), new TextFormatting(), new Divider())
                ->rules('required')
                ->hideFromIndex(),
        ];
    }
}
