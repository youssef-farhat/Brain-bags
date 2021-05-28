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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role',['etudiant','admin','enseignant']);
            $table->string('ville_E');
            $table->enum('depe_E',['informatique','Economie_gestion','Genie_proceder','mechanique','electrique']);
            $table->enum('class_E',['1 ére licence','2 eme licence','3 eme licence','1 ére master','2 eme master']);
            $table->string('Description')->nullable();
=======
<<<<<<< HEAD
<<<<<<< HEAD
            $table->string('password',50);
            $table->enum('role', ['admin','entreprise','etudiant']);
=======
            $table->string('password',255);
            $table->enum('role',['admin','enseignant','etudiant']);
>>>>>>> master
=======
            $table->string('password',70);
            $table->enum('role',['admin','enseignant','etudiant']);
=======
            $table->string('password',255);
            $table->enum('role',['admin','enseignant','etudiant']);
            $table->string('img')->default("");
>>>>>>> c8c081a55bd9931d02c5a542935be8bf09d3fbff
>>>>>>> 1fbbb44bcd673b7d4f8fe4480ca4e77708e90eeb
>>>>>>> 0946bed8ef0ca289501079489dba012950333e4b
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
