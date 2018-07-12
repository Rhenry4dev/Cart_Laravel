<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $table = 'payment_form';

	public function order()
	{
		return $this->hasMany('App\Order');
	}

	public function user()
	{
		return $this->hasMany('App\User');
	}
}
