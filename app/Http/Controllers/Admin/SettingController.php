<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use App\Traits\DeleteTrait;

class SettingController extends Controller
{
	use DeleteTrait;
	private $setting;
	public function __construct(Setting $setting)
	{
		$this->setting = $setting;
	}
    public function index()
    {
    	$settings = $this->setting->latest()->paginate(5); 
    	return view('admin.setting.index',compact('settings'));
    }
    public function create(Request $request)
    {
    	return view('admin.setting.add');
    }
    public function store(AddSettingRequest $request)
    {
    	$this->setting->create([
    		'config_key'=>$request->config_key,
    		'config_value'=>$request->config_value,
    		'type'=>$request->type

    	]);
    	return redirect()->route('settings.index');
    }
    public function edit($id)
    {
    	$setting = $this->setting->find($id);
    	return view('admin.setting.edit',compact('setting'));
    }
    public function update(Request $request, $id)
    {
    	$this->setting->find($id)->update([
    		'config_key'=>$request->config_key,
    		'config_value'=>$request->config_value
    	]);
    	return redirect()->route('settings.index');
    }
    public function delete($id)
    {
    	return $this->deleteTrait($id,$this->setting);
    }
    public function getSearch(Request $req){
        $search_name = $req->key;
        if ($search_name!==null && $search_name!=='') {
            $setting = Setting::where('config_key', 'like', '%'.$req->key.'%')->paginate(5);
            return view('admin.setting.search', compact('setting','search_name'));
        }else{
            $alert = 'Bạn chưa nhập nội dung tìm kiếm';
            return redirect()->back()->with('alert',$alert);
        }
    }
}
