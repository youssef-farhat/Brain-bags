<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    public function demandes (){
        return $this->hasMany('App\Demande');
    }
}
