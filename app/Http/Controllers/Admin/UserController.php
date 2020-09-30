<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserAddRequest;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Traits\DeleteTrait;

class UserController extends Controller
{
	use DeleteTrait;
	private $user;
	private $role;
	public function __construct(User $user, Role $role)
	{
		$this->user = $user;
		$this->role = $role;
	}
	public function index()
	{
		$users = $this->user->paginate(5);
		return view('admin.user.index', compact('users'));
	}
	public function create()
	{
		$roles = $this->role->all();
		return view('admin.user.add', compact('roles'));
	}
	public function store(UserAddRequest $request)
	{
		try {
			DB::beginTransaction();
			$user = $this->user->create([
				'name'     => $request->name,
				'email'    => $request->email,
				'password' => Hash::make($request->password),
			]);
			$roleIds = $request->role_id;
			$user->roles()->attach($roleIds);
			DB::commit();
			return redirect()->route('users.index');
		} catch (Exception $e) {
			DB::rollBack();
			Log::error('Message : ' . $e->getMessage() . '---line :' . $e->getLine());
		}
        // dd($request->role_id);
        // dd($user->id);
	}
	public function edit($id)
	{
		$roles = $this->role->all();
		$user = $this->user->find($id);
		$rolesOfUser = $user->roles;
		//dd($rolesOfUser);
		return view('admin.user.edit',compact('roles','user','rolesOfUser'));
	}
	public function update(Request $request,$id)
	{
		try {
			DB::beginTransaction();
			$this->user->find($id)->update([
				'name'     => $request->name,
				'email'    => $request->email,
				'password' => Hash::make($request->password),
			]);
			$user = $this->user->find($id);
			$user->roles()->sync($request->role_id);
			DB::commit();
			return redirect()->route('users.index');
		} catch (Exception $e) {
			DB::rollBack();
			Log::error('Message : ' . $e->getMessage() . '---line :' . $e->getLine());
		}
	}
	public function delete($id)
	{
		return $this->deleteTrait($id,$this->user);
	}
	 public function getSearch(Request $req){
        $search_name = $req->key;
        if ($search_name!==null && $search_name!=='') {
            $user = User::where('name', 'like', '%'.$req->key.'%')->paginate(5);
            return view('admin.user.search', compact('user','search_name'));
        }else{
            $alert = 'Bạn chưa nhập nội dung tìm kiếm';
            return redirect()->back()->with('alert',$alert);
        }
    }
}
