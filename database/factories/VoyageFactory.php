<?php

use Faker\Generator as Faker;

$factory->define(App\Voyage::class, function (Faker $faker) {
    return [
        'label' => $faker->name,
        'country' => $faker->country,
        'city'=> $faker->city,
        'period' => $faker->monthName($max = 'now'),
        'price' => $faker->numberBetween($min = 100, $max = 900),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'picture' => $faker->imageUrl($width = 640, $height = 480),
        'availability' => $faker->boolean,
        'user_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
