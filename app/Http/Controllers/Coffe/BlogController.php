<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class BlogController extends Controller
{
	public function showBlog()
	{
		$blogList = DB::table('blogs')
		->leftJoin('users', 'users.id', '=', 'blogs.id_user')
		->select('blogs.*', 'users.name')->get();
            //dd($blogList);
		return view('pageCoffe.blog', compact('blogList'));
	}

	public function showBlogDetail(Request $req, $id)
	{
		$blogList = DB::table('blogs')
		->leftJoin('users', 'users.id', '=', 'blogs.id_user')
		->select('blogs.*', 'users.name')->get();
		$blogDetail = DB::table('blogs')->where('id', $req->id)->first();
		return view('pageCoffe.blog-detail',compact('blogDetail', 'blogList'));
	}
	function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('products')
            ->where('name_product', 'LIKE', "%{$query}%")
            ->get();
            $output = '<table class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
               $output .= '
              <tr>
               <td><a  href="productDetail/'. $row->id .'"><img style="margin-right: 35px;" width="50" height ="50" src="'.$row->link_image.'"></img></a></td>        
               <td style="color:#c49b63;" >'.$row->name_product.'<br><span>$'.number_format($row->price).'</span></td>
               
               </tr>
               '; 
           }
           $output .= '</table>';
           echo $output;
       }
    }
}
