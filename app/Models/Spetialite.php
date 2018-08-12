<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spetialite extends Model
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
App\Models\Spetialite::create(['id_mention' => '1', 'code' => './', 'libelle' =>'./']);

*/