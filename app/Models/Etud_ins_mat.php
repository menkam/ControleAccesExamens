<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etud_ins_mat extends Model
{
    protected $guarded = array();

     protected $fillable = [
   	'id_scolariser', 
   	'id_matiere',
   	'regime'
   ];
}
/*

App\Models\Etud_ins_mat::create(['id_scolariser' => '1', 'id_matiere' => '1', 'regime' => 'regulier']);
App\Models\Etud_ins_mat::create(['id_scolariser' => '2', 'id_matiere' => '1', 'regime' => 'regulier']);
App\Models\Etud_ins_mat::create(['id_scolariser' => '3', 'id_matiere' => '1', 'regime' => 'regulier']);
App\Models\Etud_ins_mat::create(['id_scolariser' => '4', 'id_matiere' => '1', 'regime' => 'regulier']);
App\Models\Etud_ins_mat::create(['id_scolariser' => '5', 'id_matiere' => '1', 'regime' => 'regulier']);
App\Models\Etud_ins_mat::create(['id_scolariser' => '6', 'id_matiere' => '1', 'regime' => 'regulier']);
App\Models\Etud_ins_mat::create(['id_scolariser' => '7', 'id_matiere' => '1', 'regime' => 'regulier']);
App\Models\Etud_ins_mat::create(['id_scolariser' => '8', 'id_matiere' => '1', 'regime' => 'regulier']);
App\Models\Etud_ins_mat::create(['id_scolariser' => '9', 'id_matiere' => '1', 'regime' => 'regulier']);
App\Models\Etud_ins_mat::create(['id_scolariser' => '10', 'id_matiere' => '1', 'regime' => 'regulier']);

*/