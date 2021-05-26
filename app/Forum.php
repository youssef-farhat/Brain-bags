<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function etudiants (){
        return $this->hasMany('App\Etudiant');
    }
}
