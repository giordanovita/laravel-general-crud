<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Matche;
use Faker\Generator as Faker;

$factory->define(Matche::class, function (Faker $faker) {
    return [
        
            'team1' => $faker -> state,
            'team2' => $faker -> state,
            'point1' => $faker -> numberBetween(0, 7),
            'point2' => $faker -> numberBetween(0, 7),
            'result' => $faker -> boolean

       
    ];
});
