<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auth_table extends Model
{
    protected $guarded = array();

    protected $fillable = [
        'user_id',
        'username',
        'password'
    ];
}
