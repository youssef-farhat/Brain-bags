<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
<<<<<<< HEAD
            $table->Increments('id');
            $table->integer('stage_id');
            $table->bigInteger('etudiant_id')->unsigned();
=======
            $table->Increments('stage_id');
            $table->Integer('etudiant_id')->unsigned();
>>>>>>> a21786b3418421909dcc27aeb0256193ab28f6b5
            $table->integer('entreprise_id')->unsigned();
            $table->timestamps();
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
