<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $guarded = array();

    protected $fillable = [
   		'libelle_semestre',
        'id'
   	];
}
