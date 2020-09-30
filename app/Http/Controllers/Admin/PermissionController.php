<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function createPermission()
    {
        return view('admin.permissions.add');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $permission = Permission::create([
            'name'         => $request->module_parent,
            'display_name' => $request->module_parent,
            'parent_id'    => 0

        ]);
        foreach ($request->module_child as $item) {
            Permission::create([
                'name'         => $item,
                'display_name' => $item,
                'parent_id'    => $permission->id,
                'key_code'     => $request->module_parent . '_' . $item
            ]);
        }
        return redirect()->route('settings.index');
    }
}
