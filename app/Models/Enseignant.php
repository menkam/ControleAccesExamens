<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'matricule_enseignant', 
   	'id_user',
   	'id_departement',
   	'grade',
   	'fonction'
   ];
}
