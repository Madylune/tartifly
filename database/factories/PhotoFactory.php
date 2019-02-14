<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'voyage_id' => $faker->numberBetween($min = 1, $max = 50)
    ];
});
