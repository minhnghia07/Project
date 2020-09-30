<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryAddRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Components\Recusive;

class CategoryController extends Controller
{
	private $category;

	public function __construct(Category $category){
		$this->category = $category;
	}

	public function create()
	{
		$htmlOption = $this->getCategory($parentId = '');
		//------------------------------ lay category bang foreach (k sd de quy)
		// $data = Category::all();
		// foreach ($data as $value) {
		// 	if ($value['parent_id'] == 0) {
		// 		echo "<option>".$value['name']. "</option>";
		// 		foreach ($data as $value2) {
		// 			if ($value2['parent_id'] == $value['id']) {
		// 				echo "<option>"."--".$value2['name']. "</option>";
		// 				foreach ($data as $value3) {
		// 					if ($value3['parent_id'] == $value2['id']) {
		// 						echo "<option>"."-------".$value3['name']. "</option>";
		// 					}
		// 				}

		// 			}
		// 		}
		// 	}
		// }
		// $htmlOption = $this->categoryRecusive(0);
		return view('admin.categories.add',compact('htmlOption'));
	}
	
	public function index(Request $request )
	{
		$categories = $this->category->latest()->paginate(5);
		return view('admin.categories.index',compact('categories'));
	}
	public function store(CategoryAddRequest $request )
	{
		$this->category->create([
			'name' => $request->name,
			'parent_id' => $request->parent_id
		]);
		return redirect()->route ('categories.index');
	}
	public function getCategory($parentId)
	{
		$data = $this->category->all();
		$recusive = new Recusive($data);
		$htmlOption = $recusive->categoryRecusive($parentId); 
		return $htmlOption;
	}
	public function edit($id)
	{
		$category = $this->category->find($id);
		$htmlOption = $this->getCategory($category->parent_id);
		return view('admin.categories.edit',compact('category','htmlOption'));
	}
	public function update($id,Request $request)
	{
		$this->category->find($id)->update([
			'name' => $request->name,
			'parent_id' => $request->parent_id
		]);
		return redirect()->route ('categories.index');

	}
	public function delete($id)
	{
		$this->category->find($id)->delete();
		return redirect()->route ('categories.index');
	}
	public function getSearch(Request $req){
        $search_name = $req->key;
        if ($search_name!==null && $search_name!=='') {
            $category = Category::where('name', 'like', '%'.$req->key.'%')->paginate(5);
            return view('admin.categories.search', compact('category','search_name'));
        }else{
            $alert = 'Bạn chưa nhập nội dung tìm kiếm';
            return redirect()->back()->with('alert',$alert);
        }
    }
}
