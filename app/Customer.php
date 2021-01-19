<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $primaryKey = 'customer_id';
	protected $fillable = [ 'customer_name',];

	public function customers()
	{
		return $this->hasMany('App\Comment');
	}
}
