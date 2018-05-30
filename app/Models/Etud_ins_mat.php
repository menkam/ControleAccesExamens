<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etud_ins_mat extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'id_scolariser', 
   	'id_matiere',
   	'regime',
   	'date_inscription'
   ];
}
