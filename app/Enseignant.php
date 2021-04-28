<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    public function Soutenances()
    {
        return $this->hasMany('App\Soutenance.php');
    }
}
