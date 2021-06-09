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
            $table-> string('email',50)->unique();
            $table->string('ville_E');
            $table->enum('depe_E', ['informatique', 'Economie_gestion', 'Genie_proceder','mechanique',"electrique"]);
            $table->string('class_E',70);
            $table->string('description');
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
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