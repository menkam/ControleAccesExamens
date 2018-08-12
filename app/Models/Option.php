<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $guarded = array();

    protected $fillable = [
	   	'id', 
	   	'id_parcour',
        'code',
	   	'libelle'
   ];
}

/*
App\Models\Option::create(['id_parcour' => '1', 'code' => 'CDRI', 'libelle' => 'Concepteur-Développeur Réseaux et Internet']);
*/