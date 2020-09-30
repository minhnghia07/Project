<?php

namespace App\Http\Controllers\Coffe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DB;


class CategoryController extends Controller
{
    
 

	public function showDetailProduct(Request $request,$id)
    { 
    
        $categoryProduct = Category::where('status', 1)->get();

        $new_product = Product::where('id_category',$request->id)->get();

        $same_product = Product::where('id_category',$id)->orderBy('unit_price','desc')->get();
      
        $product = Product::where('id', $request->id)->first();

        return view('pageCoffe.productDetail',compact('product','categoryProduct','new_product','same_product'));
    }


    public function showCategoryProduct(Request $request,$id)
    {

        $categoryProduct = Category::where('status', 1)->get();

        $same_product = Product::where('id_category',$id)->orderBy('unit_price','desc')->get();
        
        $new_product = Product::where('id_category',$id)->get();
    	
        $product = Product::where('id', $request->id)->first();


        $category = Category::where('id', $request->id)->first();

        return view('pageCoffe/productCategory', compact('categoryProduct','new_product','product','category','same_product'));
    }
       
}
