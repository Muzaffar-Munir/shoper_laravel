<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_name','product_slug', 'product_status',];

   public function category()
    {
  		return $this->hasMany(Category::class);
	}
	public function tab()
    {
  		return $this->hasMany(Tabs::class);
	 }

   public function comments()
   {
    return $this->morphMany('App\Comment','commentable');
   }
   public function customers()
   {
    return $this->belongsTo('App\Customer');
   }






}
