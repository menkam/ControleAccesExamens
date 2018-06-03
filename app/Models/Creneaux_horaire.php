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
