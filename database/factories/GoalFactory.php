<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Goal;
use Faker\Generator as Faker;

$factory->define(Goal::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'level' => rand(1, 5),
        'comment' => $faker->sentence,
    ];
});
