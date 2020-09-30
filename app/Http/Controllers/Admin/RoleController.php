<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleAddRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use App\Traits\DeleteTrait;
use DB;

class RoleController extends Controller
{
	use DeleteTrait;
	private $role;
	private $permission;
	public function __construct(Role $role,Permission $permission)
	{

		$this->role = $role;
		$this->permission = $permission;
	}
    public function index()
    {
    	$roles = $this->role->paginate(10);
    	return view('admin.role.index',compact('roles'));
    }
    public function create()
    {
    	$permissionParent = $this->permission->where('parent_id',0)->get();
    	//dd($permissionParent);
    	return view('admin.role.add',compact('permissionParent'));
    }
    public function store(RoleAddRequest $request)
    {
    	$role = $this->role->create([
    		'name'=>$request->name,
    		'display_name'=>$request->display_name
    	]);
    	$role->permissions()->attach($request->permission_id);
    	return redirect()->route('roles.index');
    }
    public function edit($id)
    {
    	$permissionParent = $this->permission->where('parent_id',0)->get();
    	$role = $this->role->find($id);
    	$permissionChecked = $role->permissions;
    	//dd($permissionChecked);
    	return view('admin.role.edit',compact('permissionParent','role','permissionChecked'));
    }
    public function update(Request $request,$id)
    {
    	$role = $this->role->find($id);
    	$role->update([
    		'name'=>$request->name,
    		'display_name'=>$request->display_name
    	]);

    	$role->permissions()->sync($request->permission_id);
    	return redirect()->route('roles.index');
    }
    public function delete($id)
    {
    	return $this->deleteTrait($id,$this->role);
    }
    public function getSearch(Request $req){
        $search_name = $req->key;
        if ($search_name!==null && $search_name!=='') {
            $role = Role::where('name', 'like', '%'.$req->key.'%')->paginate(5);
            return view('admin.role.search', compact('role','search_name'));
        }else{
            $alert = 'Bạn chưa nhập nội dung tìm kiếm';
            return redirect()->back()->with('alert',$alert);
        }
    }
}
