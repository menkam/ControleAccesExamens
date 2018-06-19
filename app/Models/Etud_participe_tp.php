<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etud_participe_tp extends Model
{
    protected $guarded = array();

    protected $fillable = [
   	'id_tp', 
   	'id_etud_ins_mat', 
   	'statut',
   	'created_at',
   	'updated_at'
   ];
}
/*

App\Models\Etud_participe_tp::create(['id_tp' => '1', 'id_etud_ins_mat' => '1']);
App\Models\Etud_participe_tp::create(['id_tp' => '1', 'id_etud_ins_mat' => '2']);
App\Models\Etud_participe_tp::create(['id_tp' => '1', 'id_etud_ins_mat' => '3']);
App\Models\Etud_participe_tp::create(['id_tp' => '1', 'id_etud_ins_mat' => '4']);
App\Models\Etud_participe_tp::create(['id_tp' => '1', 'id_etud_ins_mat' => '5']);
App\Models\Etud_participe_tp::create(['id_tp' => '1', 'id_etud_ins_mat' => '6']);
App\Models\Etud_participe_tp::create(['id_tp' => '1', 'id_etud_ins_mat' => '7']);

*/