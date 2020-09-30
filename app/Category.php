<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;
    protected $table ='categories';
    protected $fillable = ['name','parent_id'];

    public function categoryChildrent()
    {
    	return $this->hasMany(Category::class,'parent_id');
    }
   
}
