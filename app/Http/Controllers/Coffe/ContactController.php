<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ContactController extends Controller
{
    public function showContact()
    {
    	// $feedback = DB::table('feedback')->take(5)->get();

    	// return view('pageCoffe.home',compact('feedback'));
    }
}
