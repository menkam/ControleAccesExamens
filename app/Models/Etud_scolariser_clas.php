<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etud_scolariser_clas extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'id_etudiant', 
   	'id_classe',
   	'id_annee'
   ];
}

/*
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '1', 'id_classe' => '1', 'id_annee' => '3']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '2', 'id_classe' => '1', 'id_annee' => '3']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '3', 'id_classe' => '1', 'id_annee' => '3']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '4', 'id_classe' => '1', 'id_annee' => '3']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '5', 'id_classe' => '1', 'id_annee' => '3']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '6', 'id_classe' => '1', 'id_annee' => '3']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '7', 'id_classe' => '1', 'id_annee' => '3']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '8', 'id_classe' => '1', 'id_annee' => '3']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '9', 'id_classe' => '1', 'id_annee' => '3']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '10', 'id_classe' => '1', 'id_annee' => '3']);

App\Models\Etud_scolariser_clas::create(['id_etudiant' => '1', 'id_classe' => '2', 'id_annee' => '2']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '2', 'id_classe' => '2', 'id_annee' => '2']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '3', 'id_classe' => '2', 'id_annee' => '2']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '4', 'id_classe' => '2', 'id_annee' => '2']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '5', 'id_classe' => '2', 'id_annee' => '2']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '6', 'id_classe' => '2', 'id_annee' => '2']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '7', 'id_classe' => '2', 'id_annee' => '2']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '8', 'id_classe' => '2', 'id_annee' => '2']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '9', 'id_classe' => '2', 'id_annee' => '2']);
App\Models\Etud_scolariser_clas::create(['id_etudiant' => '10', 'id_classe' => '2', 'id_annee' => '2']);

*/