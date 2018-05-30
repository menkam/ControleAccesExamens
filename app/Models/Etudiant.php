<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $guarded = array();

    protected $fillable = [
	   	'matricule_etudiant', 
	   	'id_user',
	   	'diplome_entre'
   ];
}
