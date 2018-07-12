<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_Item extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

    protected $table = 'cart_items';
    public $timestamps = false;
    protected $fillable = array(
        'cart_id', 'product_id', 'quantity'
    );
    protected $guarded = ['id'];
}
