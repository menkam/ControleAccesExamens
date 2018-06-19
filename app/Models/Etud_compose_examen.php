<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etud_compose_examen extends Model
{
    protected $guarded = array();

    protected $fillable = [
   	'id_examen', 
   	'id_etud_ins_mat', 
   	'statut',
   	'created_at',
   	'updated_at'
   ];
}
/*

App\Models\Etud_compose_examen::create(['id_examen' => '1', 'id_etud_ins_mat' => '1']);
App\Models\Etud_compose_examen::create(['id_examen' => '1', 'id_etud_ins_mat' => '2']);
App\Models\Etud_compose_examen::create(['id_examen' => '1', 'id_etud_ins_mat' => '3']);
App\Models\Etud_compose_examen::create(['id_examen' => '1', 'id_etud_ins_mat' => '4']);
App\Models\Etud_compose_examen::create(['id_examen' => '1', 'id_etud_ins_mat' => '5']);
App\Models\Etud_compose_examen::create(['id_examen' => '1', 'id_etud_ins_mat' => '6']);
App\Models\Etud_compose_examen::create(['id_examen' => '1', 'id_etud_ins_mat' => '7']);

App\Models\Etud_compose_examen::create(['id_examen' => '2', 'id_etud_ins_mat' => '1']);
App\Models\Etud_compose_examen::create(['id_examen' => '2', 'id_etud_ins_mat' => '2']);
App\Models\Etud_compose_examen::create(['id_examen' => '2', 'id_etud_ins_mat' => '3']);
App\Models\Etud_compose_examen::create(['id_examen' => '2', 'id_etud_ins_mat' => '4']);
App\Models\Etud_compose_examen::create(['id_examen' => '2', 'id_etud_ins_mat' => '5']);
App\Models\Etud_compose_examen::create(['id_examen' => '2', 'id_etud_ins_mat' => '6']);
App\Models\Etud_compose_examen::create(['id_examen' => '2', 'id_etud_ins_mat' => '7']);

App\Models\Etud_compose_examen::create(['id_examen' => '3', 'id_etud_ins_mat' => '1']);
App\Models\Etud_compose_examen::create(['id_examen' => '3', 'id_etud_ins_mat' => '2']);
App\Models\Etud_compose_examen::create(['id_examen' => '3', 'id_etud_ins_mat' => '3']);
App\Models\Etud_compose_examen::create(['id_examen' => '3', 'id_etud_ins_mat' => '4']);
App\Models\Etud_compose_examen::create(['id_examen' => '3', 'id_etud_ins_mat' => '5']);
App\Models\Etud_compose_examen::create(['id_examen' => '3', 'id_etud_ins_mat' => '6']);
App\Models\Etud_compose_examen::create(['id_examen' => '3', 'id_etud_ins_mat' => '7']);

App\Models\Etud_compose_examen::create(['id_examen' => '4', 'id_etud_ins_mat' => '1']);
App\Models\Etud_compose_examen::create(['id_examen' => '4', 'id_etud_ins_mat' => '2']);
App\Models\Etud_compose_examen::create(['id_examen' => '4', 'id_etud_ins_mat' => '3']);
App\Models\Etud_compose_examen::create(['id_examen' => '4', 'id_etud_ins_mat' => '4']);
App\Models\Etud_compose_examen::create(['id_examen' => '4', 'id_etud_ins_mat' => '5']);
App\Models\Etud_compose_examen::create(['id_examen' => '4', 'id_etud_ins_mat' => '6']);
App\Models\Etud_compose_examen::create(['id_examen' => '4', 'id_etud_ins_mat' => '7']);

*/