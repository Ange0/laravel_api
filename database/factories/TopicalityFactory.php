<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Topicality;
use Faker\Generator as Faker;

$factory->define(Topicality::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(6,true), // generer un titre avec 6 mots
        'content'=>$faker->paragraph(3,true) // generer trois paragraphe par contenu
    ];
});
