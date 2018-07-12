<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cart_item()
    {
        return $this->hasMany('App\Cart_Item');
    }

    protected $table = 'cart';
    public $timestamps = false;
    protected $fillable = [
        'token', 'status', 'user_id'
    ];
    protected $guarded = ['id'];
}
