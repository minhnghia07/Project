<?php

namespace App;

use App\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function checkPermissionAccess($permissionCheck)
    {
        //User Login vào hệ thống có quyền thêm , sửa danh mục và xem menu
        //B1: Lấy được các quyền của user đang login vào hệ thống
        //B2: So sánh giá trị đưa vào của route hiện tại có tồn tại trong các quyền mà mình lấy được hay không -> tồn tại thì true không thì false
        $roles = auth()->user()->roles;
        //dd($role);
        foreach ($roles as $item) {
            $permissions = $item->permissions;
            //dd( $permissions);
            if ($permissions->contains('key_code', $permissionCheck)) {
                return true;
            }
        }
        return false;

    }

    public function bill()
    {
        return $this->hasMany('App\Bill', 'id', 'id_user');
    }
}
