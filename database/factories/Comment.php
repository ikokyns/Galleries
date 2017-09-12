<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
	return [
		'body' => $faker->text($maxNbChars = 50),
		'user_id' => $faker->numberBetween($min = 1, $max = 10),
		'galleries_id' => $faker->numberBetween($min = 1, $max = 15)
	];
});
