<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FeedBack;
class FeedBackController extends Controller
{
     public function index()
    {
    	$FeedBack = FeedBack::leftJoin('users','users.id', '=','feedback.id_user')
		->select('feedback.*','users.fullname')->latest()->paginate(5);
    	return view('admin.feedback.index',compact('FeedBack'));
    }         
     public function getSearch(Request $req){
        $search_name = $req->key;
        if ($search_name!==null && $search_name!=='') {
            $feedback = FeedBack::where('content', 'like', '%'.$req->key.'%')->paginate(5);
            return view('admin.feedback.search', compact('feedback','search_name'));
        }else{
            $alert = 'Bạn chưa nhập nội dung tìm kiếm';
            return redirect()->back()->with('alert',$alert);
        }
    }
}
