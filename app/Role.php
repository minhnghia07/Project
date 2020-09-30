<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
	protected $guarded = [];
	protected $table ='roles' ;
	public function permissions()
	{
		return $this->belongsToMany(Permission::class,'permission_role','role_id','permission_id');
	}
	public function users()
	{
		return $this->belongsToMany(User::class);
	}
}
