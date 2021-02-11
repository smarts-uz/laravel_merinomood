<?php

/** @var Factory $factory */

use App\FaqCategory;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

$factory->define(FaqCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(rand(1,3)),
        'index' => DB::table('faq_categories')->max('index') + 1,
        'image' => UploadedFile::fake()->image('photo1.jpg')->store('faq-categories'),
    ];
});
