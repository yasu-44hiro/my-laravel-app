<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'user_id' => App\User::inRandomOrder()->first()->id,
        'title' => $faker->title,
        'detail' => $faker->realText(20),
    ];
});
