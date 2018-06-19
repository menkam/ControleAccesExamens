<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded = array();

    protected $fillable = [
        'libelle_session',
        'id'
    ];
}
