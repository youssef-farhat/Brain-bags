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
<<<<<<< HEAD
            $table->string('password',70);
            $table->enum('role',['admin','enseignant','etudiant']);
=======
            $table->string('password',255);
            $table->enum('role',['admin','enseignant','etudiant']);
            $table->string('img')->default("");
>>>>>>> c8c081a55bd9931d02c5a542935be8bf09d3fbff
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
