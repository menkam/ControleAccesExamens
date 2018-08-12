<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $guarded = array();

   protected $fillable = [
   	'id',
   	'id_option',
    'id_niveau',
   	'code_classe', 
   	'libelle_classe',
   	'effectif_classe'
   ];
}

/*
App\Models\Classe::create(['id_option'=>'1', 'id_niveau' => '3', 'code_classe' => 'LMD5', 'libelle_classe' => 'LMD5', 'effectif_classe' => '60']);
*/
