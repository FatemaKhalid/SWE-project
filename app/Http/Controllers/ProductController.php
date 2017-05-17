<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;;
use Illuminate\Http\Request;
use App\Product ;
use App\Acontact;
class ProductController extends Controller
{
    //
     public function get_products()
    {
    	$products=Product::all();
        $contacts = Acontact::get(['phone']);
//       
//        return view('ProductMain',compact('products'));
//     return response()->json($products,200);
        
// $products_name = life_in_a_bag::table('Products')->select('name')->get();
// $products_price = life_in_a_bag::table('Products')->select('price')->get();
// $products_id = life_in_a_bag::table('Products')->select('id')->get();
// $products_soldout = life_in_a_bag::table('Products')->select('soldout')->get();
//    $products_name = Product::get(['name']);
//    $products_price = Product::get(['price']);
//    $products_id = Product::get(['id']);
//    $products_soldout = Product::get(['soldout']);
    
//  return response()->json($products_name,200);

//return view('ProductMain',compact('products_name','products_price','products_id','products_soldout'));
return view ('ProductMain',compact('products','contacts'));    
        
        
        
        
    }


    public function get_single_product($product_id)
    {
    	$product=Product::find($product_id);
    	return view('ProductSingle',compact('product'));
     
  	}

    public function search_products(){
        
         $q = Input::get ( 'q' );
    $product_s = Product::where('name','LIKE','%'.$q.'%')->get();
    if(count($product_s) > 0)
        return view('productSearchRes')->withDetails($product_s)->withQuery ( $q );
    else return view ('productSearchRes')->withMessage('لا توجد منتجات مطابقة لبحثك ');
    }
}
