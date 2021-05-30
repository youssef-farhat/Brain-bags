<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $guarded = [];
    public function stages(){
        return $this->hasMany('App\Stage','id_entreprise','id');
    }
}
