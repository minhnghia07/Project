<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;
use App\User;

class OrderController extends Controller
{
    public function index()
    {
    	$Bill = Bill::leftJoin('users','users.id', '=','bills.id_user')
		->select('bills.*','users.fullname')->latest()->paginate(5);
		
    	return view('admin.order.index',compact('Bill'));
    }
    public function getDelivery(Request $req)
    {
    	$bill_delivery = Bill::find($req->id);
        $bill_delivery->status = 'Đã Giao Hàng';
        $bill_delivery->save();      
        return redirect()->back();
    }
     public function getBillDetail(Request $req){
        $bill = Bill::where('id',$req->id)->first();
        $customer = User::where('id',$bill->id_user)->first();
        $bill_detail = BillDetail::where('id_bill',$bill->id)->paginate(4);
        return view('admin.order.bill_detail',compact('bill','customer','bill_detail'));
    }
     public function getSearch(Request $req){
        $search_name = $req->key;
        if ($search_name!==null && $search_name!=='') {
            $order = Bill::where('status', 'like', '%'.$req->key.'%')->paginate(5);
            return view('admin.order.search', compact('order','search_name'));
        }else{
            $alert = 'Bạn chưa nhập nội dung tìm kiếm';
            return redirect()->back()->with('alert',$alert);
        }
    }
}
