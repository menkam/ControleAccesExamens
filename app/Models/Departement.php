<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $guarded = array();

    protected $fillable = [
   	'code_departement', 
   	'libelle_departement'
   ];
}
