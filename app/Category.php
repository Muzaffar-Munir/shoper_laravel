<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_name','category_slug','category_description', 'category_status',];

   public function product()
    {
  		return $this->belongsTo(Product::class);
	}
}

