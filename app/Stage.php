<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    public function entreprise()
    {
        return $his->belongsTo('App\Entreprise');
    }
}
