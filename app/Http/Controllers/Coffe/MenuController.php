<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class MenuController extends Controller
{
    public function showMenu()
    {
    	 
    	$products = DB::table('products')->paginate(8);
    	return view('pageCoffe.menu',compact('products'));
    }
}
