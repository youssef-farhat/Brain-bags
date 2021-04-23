<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer("soutenace_id")->unsigned();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('mdp');
            $table->string('image');
            $table->string('ville');
            $table->enum('role', ['sous_directeur', 'chef_de_département', 'enseignant']);
            $table->timestamps();      
            $table->foreign('soutenace_id')->references('id')->on('soutenances')->onDelete('restrict')->onUpdate('restrict'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrateurs');
    }
}
