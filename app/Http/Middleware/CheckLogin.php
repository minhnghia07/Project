<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use App\User;
use App\Role;
use DB;
class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         if (Auth::check()) {
            $id_user = Auth::user()->id;
            $role_user = DB::table('role_user')->where('user_id',$id_user)->select('role_user.role_id')
            ->first();
            //dd($role_user);
            if ($role_user->role_id == 1 || $role_user->role_id == 4 ||$role_user->role_id == 3  ) {
               return $next($request); 
            }else{
                return redirect()->route('show-home');
            }
         }   
    }
}
