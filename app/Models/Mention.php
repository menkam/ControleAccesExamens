<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mention extends Model
{
   protected $guarded = array();

   protected $fillable = [
	   	'id', 
	   	'id_domaine',
        'code',
	   	'libelle'
   ];
}

/*
App\Models\Mention::create(['id_domaine' => '1', 'code' => 'GI', 'libelle' =>'Génie Informatique']);

*/