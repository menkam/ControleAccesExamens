<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activite_conc_classe extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'id_activite', 
   	'id_classe'
   ];
}
