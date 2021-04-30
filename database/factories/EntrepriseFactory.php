<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entreprise;
use Faker\Generator as Faker;

$factory->define(Entreprise::class, function (Faker $faker) {
    return [
        'email' => $faker->freeEmail,
        'mdp' => $faker->password,
        'nom_entreprise' => $faker->name,
        'categorie' => $faker->randomElement(['Informatique', 'Economie_gestion', 'Genie_proceder', 'mechanique', 'electrique']),
        'ville' => $faker->state,
        'logo' => $faker->imageUrl,
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'created_at' => now()
    ];
});
