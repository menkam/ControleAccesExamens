<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $guarded = array();

    protected $fillable = [
	   	'id_annee', 
	   	'id_semestre',
        'id_niveau',
        'duree',
	   	'type_activite',
	   	'date_debut_activite', 
	   	'date_fin_activite'
   ];
}