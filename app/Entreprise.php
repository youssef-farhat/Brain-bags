<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    public function stages()
    {
        return $this->hasMany('App\Stage');
    }
    public function user(){
        return $this->belongsTo('App\User','email','email');
    }
}
