<?php

/** @var Factory $factory */

use App\Banner;
use App\Support\Constants\BannerType;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Http\UploadedFile;

$factory->define(Banner::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(array_keys(BannerType::all())),
        'image' => UploadedFile::fake()->image('photo2.jpg')->store('banners'),
        'title' => $faker->sentence(rand(2, 5)),
        'des' => $faker->sentence(rand(3, 10)),
        'link' => $faker->url,
    ];
});
