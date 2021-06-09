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
            $table->enum('type', ['Initiation', 'Perfectionnement' ,'Pfe']);
            $table->enum('departement', ['Informatique', 'Economie_gestion', 'Genie_proceder', 'mechanique', 'electrique']);
            $table->date('date');
            $table->string('localisation');
            $table->string('payement');
            $table->text('description');
            $table->string('payement')->nullable();
            $table->integer('entreprise_id')->unsigned()->nullable();
            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade')->onUpdate('cascade');
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
