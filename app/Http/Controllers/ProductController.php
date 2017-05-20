<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;;
use Illuminate\Http\Request;
use App\Product ;
use App\Acontact;
use Storage;

use Auth;
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
        
    	return view('ProductSingle',compact('product','contacts'));
     
  	}

    public function search_products(Request $request){
        
         $q=$request->get('search');
$contacts = Acontact::get(['phone']);
        if($q!="")
        {
    $product_s = Product::where('name','LIKE','%'.$q.'%')->get();
    if(count($product_s) > 0)
        return view('productSearchRes',compact('product_s','contacts'));
    else return view ('productSearchRes')->withMessage('لا توجد منتجات مطابقة لبحثك ');
    }
        else {return back();}
    }
    public function add (){
      if(Auth::check())
     {
        return view ('admin.addProducts');

        }
      else 
        {
          return redirect('/home');
        }
    }
    
        public function Save(Request $request)
  {
      
      if(Auth::check())
      {
        $path=Storage::disk('public')->put('images',$request->file('image'));

        
          $product = new Product;
          $product->name = $request->get('name');
          $product->pic = $path;
           $product->description = $request->get('content');
           $product->price = $request->get('price');

          $product->save();

    
       
        return redirect('/showProducts');

        }
      else 
        {
          return redirect('/home');
        }

  }
    
    
    
      public function get_products_for_admin()
    {
        if(Auth::check())
      {
    	$products=Product::all();

return view ('admin.showProducts',compact('products'));    
        
      }
        else {
          return redirect('/home');
        }
        
        
    }
    
    public function get_single_product_for_admin($product_id)
    {
       if(Auth::check())
      {
        
        $product=Product::find($product_id);
        if (!(empty($product)))
            {
                return view('admin.showSingleProduct',compact('product'));

            }  
        else {
            $products=Product::all();

return view ('admin.showProducts',compact('products'));   
        }
      }
        else {
                   return redirect('/home');
   
        }
    }
    
    public function update_product(Request $request)
    {
        if(Auth::check())
      {
       $product= Product::where('id', $request->get('p_id'))->get();
           
        if ($product->count()){
            Product::where('id', $request->get('p_id'))->update(['name' => $request->get('name'),
                                                            'price' => $request->get('price'),
                                                           'description' => $request->get('description'),
                                                           'soldout' => $request->get('opt-sold')]
                                                           );
            
            $product=Product::find($request->get('p_id'));
        
    	return view('admin.showSingleProduct',compact('product'));
        }
//        
//        $products=Product::all();
//
//return view ('admin.showProducts',compact('products')); 
         $request->session()->flash('alert-warning', 'The product you are trying to update has already been deleted!');

        return redirect('/showProducts');
//      Response::make("Not Found", 404);
    }
        else {
            return redirect('/home');
        }
    }
    
    public function change_pic(Request $request)
    {
                if(Auth::check())
                {
                 $path=Storage::disk('public')->put('images',$request->file('image'));
                $product=Product::where('id', $request->get('p_id'))->get();
         if ($product->count())
            {
                Product::where('id', $request->get('p_id'))->update(['pic' =>$path]);
                $product=Product::find($request->get('p_id'));

    	       return view('admin.showSingleProduct',compact('product'));
            }
 $request->session()->flash('alert-warning', 'The product you are trying to update has already been deleted!');
                    
        return redirect('/showProducts');

//Response::make("Not Found", 404);            
    }
        
        else {
                        return redirect('/home');

        }
        
    }
   public function del_product(Request $request)
   {
               if(Auth::check())
               {
        $product=Product::find($request->get('p_id'));
            if (!(empty($product)))
            {
        $product=Product::find($request->get('p_id'))->delete();
            }
              $request->session()->flash('alert-success', 'This product has been deleted!');

               return redirect('/showProducts');

    
//       Redirect::route(showProducts);
       
   }
       else {
                       return redirect('/home');

       }
   }
    
}
