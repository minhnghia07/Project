<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Cart;
use App\Product;
class CartController extends Controller
{
    public function showCart() 
    {
        
        
    	$products = DB::table('products')->orderby(DB::raw('RAND()'))->paginate(8);
    	return view('pageCoffe.cart', compact('products'));
    }

    public function AddCart(Request $req,$id)
	{
		//dd($id);
		$product = DB::table('products')->where('id', $id)->first();
		//dd($product);
        if ($product != null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;

            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);
            
            $req->session()->put('Cart', $newCart);
            //dd(Session('Cart'));
            //dd($newCart);
        }
        return view('pageCoffe.cart-detail');
	}

	public function DeleteItemCart(Request $req, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if(Count( $newCart->products) > 0){
            $req->session()->put('Cart', $newCart);
        }else{
            $req->Session()->forget('Cart');
        }
        return view('pageCoffe.cart-detail');
    }

    public function DeleteItemListCart(Request $req, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);

        if(Count( $newCart->products) > 0){
            $req->session()->put('Cart', $newCart);
        }else{
            $req->Session()->forget('Cart');
        }
        return view('pageCoffe.list-cart');
    }

    public function SaveItemListCart(Request $req, $id, $quanty)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->UpdateItemCart($id, $quanty);

        $req->session()->put('Cart', $newCart);
        return view('pageCoffe.list-cart');
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
