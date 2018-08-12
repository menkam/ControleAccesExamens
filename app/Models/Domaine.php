<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
   protected $guarded = array();

   protected $fillable = [
	   	'id', 
	   	'id_cursus',
        'code',
	   	'libelle'
   ];
}

/*
App\Models\Domaine::create(['id_cursus' => '1', 'code' => 'ST', 'libelle' => 'Science et Technologie']);

*/