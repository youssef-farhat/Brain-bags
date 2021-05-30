<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $guarded = []; 
    public function forums (){
        return $this->hasMany('App\Forum');
    }
}
