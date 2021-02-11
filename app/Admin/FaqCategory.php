<?php

namespace App\Admin;


use Arniro\Admin\Fields\Gallery;
use Arniro\Admin\Fields\HasMany;
use Arniro\Admin\Fields\Image;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Http\Requests\AdminRequest;
use Arniro\Admin\Http\Resources\Resource;

class FaqCategory extends Resource
{
    public static $model = 'App\FaqCategory';
    public static $search = ['name'];
    public static $title = 'name';

    public static function label()
    {
        return "Категории вопросов";
    }

    public function fields()
    {
        return [
            Text::make('Название', 'name')
                ->rules('required'),
            Image::make('Изображение', 'image')->dir('faq-categories'),
            Text::make('Индекс', 'index')
                ->storeVia(function (AdminRequest $request, \App\FaqCategory $model) {
                    $model->index = \App\FaqCategory::max('index') + 1;
                })
                ->disableUpdating()
                ->hidden(),
            HasMany::make('questions', 'App\Admin\Question')
        ];
    }
}
