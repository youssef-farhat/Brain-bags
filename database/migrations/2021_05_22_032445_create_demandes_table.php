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
            $table->integer('stage_id')->unsigned();
            $table->integer('etudiant_id')->unsigned();
            $table->integer('entreprise_id')->unsigned();
            $table->timestamps();
            $table->foreign('stage_id')->references('id')->on('stages');
            $table->foreign('etudiant_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade')->onUpdate('cascade');
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
