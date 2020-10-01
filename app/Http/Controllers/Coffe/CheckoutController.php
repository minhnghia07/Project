<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request\CheckoutRequest;
use Illuminate\Http\Request;
use DB;
use App\Cart;
use App\Product;
use Session;
use App\User;
use App\Bill;
use App\BillDetail;

class CheckoutController extends Controller
{
    public function showCheckout()
    {
        $blogList = DB::table('blogs')
        ->leftJoin('users', 'users.id', '=', 'blogs.id_user')
        ->select('blogs.*', 'users.name')->paginate(3);
        
    	$products = DB::table('products')->orderby(DB::raw('RAND()'))->paginate(8);
    	return view('pageCoffe.checkout', compact('products', 'blogList'));
    }

    public function showPostCheckout(Request $req)
    {
    	// $this->validate($req,
     //        [
     //            'email' => 'email',
     //            'address' => 'address'
     //        ],
     //        [
     //            'email.email'=>"Khong dung dinh dang email",
     //            'address' => ""
     //        ]);
    	
    	$cart = Session::get('Cart');
        $find_user = User::where('email', $req->email)->first();
        $user = new User;
        $bill = new Bill;

        $user->name = $req->name;
        $user->email = $req->email;
        $user->gender = $req->gender;
        $user->address = $req->address;
        $user->district = $req->district;
        $user->city = $req->city;
        $user->CMTND = $req->cmtnd;
        $user->phone = $req->phone;

        if($find_user == null){
            $user->save();
            $bill->id_user = $req->id;
            $bill->address = $req->address;
            $bill->district = $req->district;
            $bill->city = $req->city;
            $bill->total_price = $cart->totalPrice;
            $bill->save();
        }else{
            $bill->id_user = $find_user->id;
            $bill->address = $req->address;
            $bill->district = $req->district;
            $bill->city = $req->city;
            $bill->total_price = $cart->totalPrice;
            $bill->save();
        }

        foreach ($cart->products as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['quanty'];
            $bill_detail->price = $value['price']/$value['quanty'];
            $bill_detail->total_price = $cart->totalPrice;
            $bill_detail->save();
            //return redirect()->route('show-home');
        }

        Session::forget('Cart');
        // $aler =  "alertify.success('Delete products success !!!')";
        return redirect()->route('show-home');
    	
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
