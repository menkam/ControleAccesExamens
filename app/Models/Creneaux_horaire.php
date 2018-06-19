<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creneaux_horaire extends Model
{
    protected $guarded = array();

    protected $fillable = [
        'id',
        'duree',
        'libelle_creneaux'
    ];
}

/*
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '08H00-08H30']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '08H30-09H00']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '09H00-09H30']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '09H30-10H00']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '10H00-10H30']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '10H30-11H00']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '11H00-11H30']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '11H30-12H00']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '12H30-13H30']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '13H00-13H30']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '13H30-14H00']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '14H00-14H30']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '14H30-15H00']);
App\Models\Creneaux_horaire::create(['duree' => '30', 'libelle_creneaux' => '15H00-15H30']);

App\Models\Creneaux_horaire::create(['duree' => '1', 'libelle_creneaux' => '08H00-09H00']);
App\Models\Creneaux_horaire::create(['duree' => '1', 'libelle_creneaux' => '09H00-10H00']);
App\Models\Creneaux_horaire::create(['duree' => '1', 'libelle_creneaux' => '10H00-11H00']);
App\Models\Creneaux_horaire::create(['duree' => '1', 'libelle_creneaux' => '11H00-12H00']);
App\Models\Creneaux_horaire::create(['duree' => '1', 'libelle_creneaux' => '12H30-13H30']);
App\Models\Creneaux_horaire::create(['duree' => '1', 'libelle_creneaux' => '13H30-14H30']);
App\Models\Creneaux_horaire::create(['duree' => '1', 'libelle_creneaux' => '14H30-15H30']);
App\Models\Creneaux_horaire::create(['duree' => '1', 'libelle_creneaux' => '15H30-16H30']);

App\Models\Creneaux_horaire::create(['duree' => '2', 'libelle_creneaux' => '08H00-10H00']);
App\Models\Creneaux_horaire::create(['duree' => '2', 'libelle_creneaux' => '10H00-12H00']);
App\Models\Creneaux_horaire::create(['duree' => '2', 'libelle_creneaux' => '12H30-14H30']);
App\Models\Creneaux_horaire::create(['duree' => '2', 'libelle_creneaux' => '14H30-16H30']);

*/