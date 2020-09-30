<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	//protected $guarded = [];
	protected $fillable = ['id_user','link_image','title','content','status'];
    protected $table ='blogs' ;
}
