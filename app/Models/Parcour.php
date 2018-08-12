<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcour extends Model
{
	protected $guarded = array();

    protected $fillable = [
	   	'id', 
	   	'id_mention',
        'code',
	   	'libelle'
   ];
}

/*
App\Models\Parcour::create(['id_spetialite' => '1', 'code' => 'IR', 'libelle' => 'Informatique et réseaux']);

*/