<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //Use of faker to generate comments
        'text' => $faker -> text(rand(40, 150)),
        'user_id' => App\User::inRandomOrder() -> first() -> id,
        'anime_post_id' => App\AnimePost::inRandomOrder() -> first() -> id,
    ];
});
