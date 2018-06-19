<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $guarded = array();

   protected $fillable = [
   	'code_classe', 
   	'id_cursus',
    'id_departement',
    'id_niveau',
   	'libelle_classe',
   	'effectif_classe'
   ];
}
