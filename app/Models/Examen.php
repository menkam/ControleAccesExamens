<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'id_activite', 
   	'id_ens_chef_dpt', 
   	'id_matiere',
   	'id_creneau', 
   	'id_session', 
   	'id_surveillant',
   	'date_examen'
   ];
}