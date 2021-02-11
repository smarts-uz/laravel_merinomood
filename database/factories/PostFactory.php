<?php

/** @var Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Http\UploadedFile;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(rand(2, 5)),
        'miniature' => UploadedFile::fake()->image('photo2.jpg')->store('posts/miniatures'),
        'banner' => UploadedFile::fake()->image('photo2.jpg')->store('posts/banners'),
        'des' => $faker->sentence(rand(3, 10)),
        'content' => $faker->realText(rand(3000, 4000), 3),
    ];
});
