<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'code_matiere',
   	'libelle_matiere',
   	'nbr_credit'
   ];
}

/*
App\Models\Creneaux_horaire::create(['code_matiere' => '', 'libelle_matiere' => 'RAS', 'nbr_credit' => '']);
*/