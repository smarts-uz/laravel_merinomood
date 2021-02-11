<?php

/** @var Factory $factory */

use App\Question;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\DB;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(rand(5, 10)),
        'answer' => $faker->paragraph(rand(10, 20)),
        'index' => DB::table('questions')->max('index') + 1,
    ];
});
