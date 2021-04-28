<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Demande;
use App\Entreprise;
use App\Etudiant;
use App\Stage;
use Faker\Generator as Faker;

$factory->define(Demande::class, function (Faker $faker) {
    return [
        'stage_id'=>Stage::get('id')->random(),
        'etudiant_id'=>Etudiant::get('id')->random(),
        'entreprise_id'=>Entreprise::get('id')->random()
    ];
});
