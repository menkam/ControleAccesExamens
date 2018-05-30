<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annee_academique extends Model{

    protected $guarded = array();

    protected $fillable = ['id','libelle_annee'];

}
