<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
        //
        'text' => $faker->sentence(10),
    ];
});
