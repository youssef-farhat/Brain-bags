<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $guarded = []; 
    public function Soutenances()
    {
        return $this->hasMany('App\Soutenance.php');
    }
}
