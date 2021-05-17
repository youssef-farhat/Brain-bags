<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->Increments('id');
            $table-> string('E_mail',70);
            $table->string('nom',70);
            $table->string('prenom',70);
            $table->string('img');
            $table->string('ville_E');
            $table->string('depar_E',20);
            $table->string('class_E',70);
            $table->string('motp_E');
            $table->string('description');
            $table->timestamps();
            $table->engine = "InnoDB";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
