<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Etudiant;
use Faker\Generator as Faker;

$factory->define(Etudiant::class, function (Faker $faker) {
    return [
        'E_mail'=> $faker->email,
        'nom_prenom_E'=>$faker->firstName,
        'img'=>$faker->imageUrl,
        'ville_E'=>$faker->city,
        'depar_E'=>$faker->jobTitle,
        'motp_E'=>$faker->word,
        'class_E'=>$faker->word,
        'depar_E'=>$faker->word,
        'description'=>$faker->sentence
    ];
});
