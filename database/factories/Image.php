<?php

use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
		'imageURL' => $faker->imageUrl($width = 400, $height = 300),
		'gallerie_id' => $faker->numberBetween($min = 1, $max = 15)
    ];
});
