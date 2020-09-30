<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table ='bills' ;
    protected $primaryKey = "id";
    public function bill_details()
    {
    	return $this->hasMany('App\BillDetail','id','id_bill');
    }

    public function users()
    {
    	return $this->belongsTo('App\User', 'id', 'id_bill');
    }
    
}
