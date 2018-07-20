<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api_tokens extends Model
{
    protected $table = 'api_tokens';
    public $timestamps = false;
    protected $fillable = [
        'name','token'
    ];
    protected $hidden = [
    	'id'
    ];
}
