<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    public function Soutenances()
    {
        return $this->hasMany('App\Soutenance.php');
    }
}
