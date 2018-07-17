<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $table = 'address_register';
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'street_name', 'number', 'public_place', 'neighbourhood' , 'town', 'state', 'country', 'CEP', 'cart_token'
        ];
    protected $guarded = ['id'];

    public function order()
    {
         return $this->hasMany('App\Order');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
