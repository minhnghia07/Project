<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Product;

class ShopController extends Controller
{
    public function showShop()
    { 
    	
    	$products = DB::table('products')->orderby(DB::raw('RAND()'))->paginate(8);
    	return view('pageCoffe.shop' , compact('products'));
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
