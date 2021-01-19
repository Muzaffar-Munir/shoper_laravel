<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabs extends Model
{
    protected $primaryKey = 'tab_id';
    protected $fillable = [
        'tab_name','tab_slug', 'tab_status',];
        public function product()
    {
  		return $this->belongsTo(Product::class);
	}
}
