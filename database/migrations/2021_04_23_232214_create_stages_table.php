<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['initiation', 'perfectionnement' ,'pfe']);
            $table->enum('departement', ['Informatique', 'Economie_gestion', 'Genie_proceder', 'mechanique', 'electrique']);
            $table->date('date');
            $table->string('image');
            $table->string('localisation');
            $table->string('payement');
<<<<<<< HEAD
            $table->string('description');
            $table->integer('entreprise_id')->unsigned();
            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade');
=======
            $table->text('description');
            $table->integer('id_entreprise')->unsigned();
            $table->foreign('id_entreprise')->references('id')->on('entreprises')->onDelete('cascade');
>>>>>>> 3f632b0d7822e1c50873da04bc36b64d14c8fb22
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
        Schema::dropIfExists('stages');
    }
}
