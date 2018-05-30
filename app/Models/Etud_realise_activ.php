<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etud_realise_activ extends Model
{
    protected $guarded = array();

    protected $fillable = [
   	'id_activite', 
   	'id_etud_ins_mat', 
   	'debut_realisation',
   	'fin_realisation',
   	'statut'
   ];
}
