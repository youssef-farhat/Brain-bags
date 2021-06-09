<?php

use App\Enseignant;
use App\Etudiant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role',['admin','enseignant','etudiant','entreprise']);
            //$table->string('ville_E');
            //$table->enum('depe_E',['informatique','Economie_gestion','Genie_proceder','mechanique','electrique']);
            //$table->enum('class_E',['1 ére licence','2 eme licence','3 eme licence','1 ére master','2 eme master']);
            //$table->string('Description')->nullable();
            $table->string('img')->default("");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
