<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_etude')->unsigned();
            $table->integer('id_profe')->unsigned();
            $table->string('description');
            $table->foreign('id_etude')->references('id')->on('etudiants')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('id_profe')->references('id')->on('enseignants')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('forums');
    }
}
