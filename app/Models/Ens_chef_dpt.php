<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ens_chef_dpt extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'matricule_enseignant', 
   	'id_departement',
   	'id_debut_diriedpt',
   	'date_fin_diriedpt',
   	'statut'
   ];
}
