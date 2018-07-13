<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public $timestamps = false;

    protected $fillable = [
        'user_id', 'cart_id', 'payment_id', 'address_id', 'order_status'
    ];

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function address()
    {
        return $this->belongsTo('App\Address');
    }

    public function cart()
    {
        return $this->hasMany('App\cart');
    }

    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }
}
