<?php

namespace App\Admin;


use Arniro\Admin\Fields\BelongsTo;
use Arniro\Admin\Fields\Text;
use Arniro\Admin\Fields\Tiptap\Extensions\Divider;
use Arniro\Admin\Fields\Tiptap\Extensions\Headings;
use Arniro\Admin\Fields\Tiptap\Extensions\TextFormatting;
use Arniro\Admin\Fields\Tiptap\Tiptap;
use Arniro\Admin\Http\Requests\AdminRequest;
use Arniro\Admin\Http\Resources\Resource;

class Question extends Resource
{
    public static $model = 'App\Question';
    public static $search = ['name'];
    public static $title = 'name';
    public static $icon = 'question';

    public static function label()
    {
        return "Вопросы и ответы";
    }

    public function fields()
    {
        return [
            BelongsTo::make('Категория вопросов', 'faqCategory', FaqCategory::class)
                ->rules('required')
                ->hideFromIndex(),
            Text::make('Вопрос', 'name')
                ->rules('required'),
            Tiptap::make('Ответ', 'answer')
                ->extensions(new Headings(), new TextFormatting(), new Divider())
                ->rules('required')
                ->hideFromIndex(),
            Text::make('Индекс', 'index')
                ->storeVia(function (AdminRequest $request, \App\Question $model) {
                    $model->index = \App\Question::where('faq_category_id', $request->faqCategory)->max('index') + 1;
                })
                ->disableUpdating()
                ->hidden(),
        ];
    }
}
