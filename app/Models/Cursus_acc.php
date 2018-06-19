<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cursus_acc extends Model
{
    protected $guarded = array();

   protected $fillable = ['code','libelle'];
}
