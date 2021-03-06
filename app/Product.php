<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $table ='products' ;
     protected $guarded = [];
     public function category()
     {
     	return $this->belongsTo(Category::class, 'id_category');
     }
}
