<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    //
    public function etudiant()
    {
        return $this->belongsTo('App\Etudiant');
    }
}
