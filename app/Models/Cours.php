<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'id_activite', 
   	'id_enseigant', 
   	'id_matiere',
   	'id_creneau',
    'date_cours'
   ];
}

