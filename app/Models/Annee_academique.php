<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annee_academique extends Model{

    protected $guarded = array();

    protected $fillable = ['id','libelle_annee'];

}

/*

App\Models\Annee_academique::create(['libelle_annee' => '2015-2016']);
App\Models\Annee_academique::create(['libelle_annee' => '2016-2017']);
App\Models\Annee_academique::create(['libelle_annee' => '2017-2018']);

*/