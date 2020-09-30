<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BlogAddRequest;
use App\Blog;
use App\Http\Controllers\Controller;
use App\Traits\DeleteTrait;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    use DeleteTrait;
    private $blog;
    public function __construct( BLog $blog)
    {
        $this->blog = $blog;
    }
    public function index()
    {
        $blog = $this->blog->leftJoin('users','users.id', '=','blogs.id_user')
		->select('blogs.*','users.name')->paginate(5);
		// $bloggg = DB::table('blogs')
		// ->leftJoin('users','users.id', '=','blogs.id_user')
		// ->select('blogs.*','users.name')->get();
		
       return view('admin.blog.index', compact('blog'));
    }
    public function create()
    {
        $blog = $this->blog->all();
        return view('admin.blog.add', compact('blog'));
    }
    public function store(BlogAddRequest $request)
    {
        // $id= Auth::user();
        // $id = Auth::id();
        // dd($id);
        try {
            DB::beginTransaction();
            $blog = $this->blog->create([
                'id_user'    => Auth::id(),
                'link_image' => $request->link_image,
                'title'      => $request->title,
                'content'    => $request->contents,
                'status'     => $request->status
            ]);

            DB::commit();
            return redirect()->route('blog.index');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Message : ' . $e->getMessage() . '---line :' . $e->getLine());
        }
    }
    public function edit($id)
	{
		$blog = $this->blog->find($id);
		//dd($blog);
		return view('admin.blog.edit',compact('blog'));
	}
	public function update(Request $request,$id)
	{
		 try {
            DB::beginTransaction();
             $this->blog->find($id)->update([
                'id_user'    => Auth::id(),
                'link_image' => $request->link_image,
                'title'      => $request->title,
                'content'    => $request->contents,
                'status'     => $request->status,
            ]);

            DB::commit();
            return redirect()->route('blog.index');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Message : ' . $e->getMessage() . '---line :' . $e->getLine());
        }
	}
    public function delete($id)
    {
        return $this->deleteTrait($id, $this->blog);
    }
      public function getSearch(Request $req){
        $search_name = $req->key;
        if ($search_name!==null && $search_name!=='') {
            $blog = Blog::where('title', 'like', '%'.$req->key.'%')->paginate(5);
            return view('admin.blog.search', compact('blog','search_name'));
        }else{
            $alert = 'Bạn chưa nhập nội dung tìm kiếm';
            return redirect()->back()->with('alert',$alert);
        }
    }
}
