<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ServicesController extends Controller
{
    public function showServices()
    {
    	
    	return view('pageCoffe.services');
    }
}
