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
            $table->Increments('id');
<<<<<<< HEAD
            $table->integer('stage_id');

            $table->integer('etudiant_id')->unsigned();

=======
            $table->integer('stage_id');            $table->integer('etudiant_id')->unsigned();
>>>>>>> origin/dali
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
