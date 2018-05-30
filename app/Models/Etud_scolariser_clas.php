<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etud_scolariser_clas extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'matricule_etudiant', 
   	'id_classe',
   	'id_annee',
   	'date_scolariser'
   ];
}
