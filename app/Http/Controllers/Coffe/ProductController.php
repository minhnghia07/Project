<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
	public function ShowProduct(Request $req, $id)
	{

    	$products = DB::table('products')->orderby(DB::raw('RAND()'))->paginate(8);


		$proSingle = DB::table('products')->where('id', $req->id)->first();

		$Recommand_Products = Product::latest()->take(4)->get();

		return view('pageCoffe.productDetail', compact('Recommand_Products', 'proSingle'));
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
