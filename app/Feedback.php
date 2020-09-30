<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
     protected $table ='feedback' ;
      protected $guarded = [];
       public function users()
    {
    	return $this->belongsTo('App\User', 'id', 'id_user');
    }
}
