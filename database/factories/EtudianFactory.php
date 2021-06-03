<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Etudiant;
use App\User;
use Faker\Generator as Faker;

$factory->define(Etudiant::class, function (Faker $faker) {
    return [
        'email'=>User::get('email')->random(),
        'ville_E'=>$faker->city,
        'depar_E'=>$faker->jobTitle,
        'class_E'=>$faker->word,
        'depar_E'=>$faker->word,
        'description'=>$faker->sentence
    ];
});