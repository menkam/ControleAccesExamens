<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cursus_acc extends Model
{
    protected $guarded = array();

   protected $fillable = [
	   	'id', 
        'code',
	   	'libelle'
   ];
}

/*
App\Models\Cursus_acc::create(['code' => 'DUT', 'libelle' => 'Diplôme Universitaire de Technologie']);

*/