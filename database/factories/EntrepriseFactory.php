<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entreprise;
use Faker\Generator as Faker;

$factory->define(Entreprise::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'mdp' => $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
        'nom_entreprise' => $faker->word,
        'categorie' => $faker->randomElement($array = array ('Informatique','Economie_gestion','Genie_proceder','mechanique','electrique')),
        'ville' => $faker->address,
        'logo' => $faker->imageUrl,
        'description' => $faker->sentence
    ];
});
