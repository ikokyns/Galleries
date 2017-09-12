<?php

use Faker\Generator as Faker;

$factory->define(App\Gallerie::class, function (Faker $faker) {
    return [
		'name' => $faker->word,
		'description' => $faker->text($maxNbChars = 20),
		'user_id' => $faker->numberBetween($min = 1, $max = 10),
		'image_id' => $faker->numberBetween($min = 1, $max = 25)
    ];
});
