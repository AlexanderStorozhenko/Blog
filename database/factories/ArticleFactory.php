<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->text(50),
        'text' => $faker->text(250),
        'raw_content' => "",
        'content' => "",
    ];
});
