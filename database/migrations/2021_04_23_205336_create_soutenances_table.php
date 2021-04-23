<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoutenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soutenances', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('etudiant_id')->unsigned();
            $table->integer("prof_id")->unsigned();
            $table->string('type');
            $table->date('date');
            $table->string('sale');
            $table->string('image');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('prof_id')->references('id')->on('enseignants')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('soutenances');
    }
}
