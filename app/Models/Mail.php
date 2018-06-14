<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $guarded = array();
    
    protected $fillable = [
    	'id_user_from', 
    	'id_user_to', 
    	'objet',
    	'libelle',
    	'lue',
    	'created_at',
    	'updated_at'
    ];
}
