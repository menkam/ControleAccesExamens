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
    'id_surveillant',
   	'id_session', 
   	'date_examen'
   ];
}

/*
App\Models\Examen::create(['id_activite' => '1', 'id_ens_chef_dpt' => '1', 'id_matiere' => '1', 'id_creneau' => '23', 'id_surveillant' => '1', 'id_session' => '1',  'date_examen' => '18-06-2018']);
App\Models\Examen::create(['id_activite' => '1', 'id_ens_chef_dpt' => '1', 'id_matiere' => '2', 'id_creneau' => '24', 'id_surveillant' => '1', 'id_session' => '1',  'date_examen' => '18-06-2018']);
App\Models\Examen::create(['id_activite' => '1', 'id_ens_chef_dpt' => '1', 'id_matiere' => '3', 'id_creneau' => '25', 'id_surveillant' => '1', 'id_session' => '1',  'date_examen' => '18-06-2018']);
App\Models\Examen::create(['id_activite' => '1', 'id_ens_chef_dpt' => '1', 'id_matiere' => '4', 'id_creneau' => '26', 'id_surveillant' => '1', 'id_session' => '1',  'date_examen' => '18-06-2018']);

*/