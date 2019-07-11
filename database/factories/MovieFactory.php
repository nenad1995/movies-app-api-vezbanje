<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    $values = collect([
        'Action',
        'Comedy',
        'Drama',
        'Horror',
        'Western',
        'Thriller',
        'Animation',
        'Documentary'
    ]);

    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'director' => $faker->name(),
        'imageUrl' => $faker->imageUrl(),
        'duration' => $faker->numberBetween($min = 60, $max = 200),
        'releaseDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'genre' => $values->random(2)
    ];
});
