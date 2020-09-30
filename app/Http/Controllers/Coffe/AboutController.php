<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class AboutController extends Controller
{
    public function showAbout()
    {
    	$feedback = DB::table('feedback')
        ->leftJoin('users', 'users.id', '=', 'feedback.id_user')
        ->select('feedback.*', 'users.name')->take(5)->get();

    	return view('pageCoffe.about' ,compact('feedback'));
    }
}
