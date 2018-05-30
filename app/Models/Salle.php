<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'code_salle', 
   	'libelle_salle',
   	'nbre_places'
   ];
}
