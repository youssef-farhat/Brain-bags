<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    public function stages(){
        return $this->hasMany('App\Stage','id_entreprise','id');
    }
}
