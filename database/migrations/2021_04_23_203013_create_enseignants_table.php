<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('mdp');
            $table->string('image');
            $table->string('ville');
            $table->enum('departement', ['Technologie_de_l_information', 'Mecanique', 'électrique','Commerce']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignants');
    }
}
