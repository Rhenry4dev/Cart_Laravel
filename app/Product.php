<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function cart()
    {
        return $this->hasMany('App\Cart_Item');
    }

    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'name', 'price', 'category_id', 'description', 'quantity', 'image' 
    ];
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
