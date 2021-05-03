<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entreprise;
use App\Stage;
use Faker\Generator as Faker;

$factory->define(Stage::class, function (Faker $faker) {
    return [
        'type'=>$faker->randomElement(['initiatin', 'perfectionnement' ,'pfe']),
        'departement'=>$faker->randomElement(['Informatique', 'Economie_gestion', 'Genie_proceder', 'mechanique', 'electrique']),
        'date'=>$faker->date,
        'image'=>$faker->word,
        'localisation'=>$faker->country,
        'payement'=>$faker->word,
        'description'=>$faker->text(20),
        'id_entreprise'=>Entreprise::get('id')->random()
    ];
});
