<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soutenance extends Model
{
    public function Administrateur()
    {
        // On supposant que chaque soutenance est assistée par un et un seul Administrateur
        return $this->belongsTo('App\Administrateur');
    }
      
    public function Enseignants()
    {
        // On supposant que chaque soutenance est assistée par un ou plusieurs enseignants
        return $this->hasMany('App\Enseignant');
    }
}
