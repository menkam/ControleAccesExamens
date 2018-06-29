<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    protected $guarded = array();


    protected $fillable = [
        'role_id', 'user_id',
    ];
}