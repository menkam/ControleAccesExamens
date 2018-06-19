<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle_activite extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'id_activite', 
   	'id_salle'
   ];
}
