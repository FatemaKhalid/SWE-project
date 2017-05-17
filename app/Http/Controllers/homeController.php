<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Continent ;
use App\Product ;
use Storage ;
class homeController extends Controller
{
     public function africa($loc_id)
    {
    //	$data=homeModel::all();
    	
        $continent=Continent::find($loc_id);;
        return view('africa',compact('continent'));
     
      /*   $data['loc_id'] = $loc_id;
       return View::make('africa', $data);*/
    }

     public function articles($count_id)
    {
    //	$data=homeModel::all();
    	
        $name=$count_id;
        return view('articles',compact('name'));
     
      /*   $data['loc_id'] = $loc_id;
       return View::make('africa', $data);*/
    }
      public function mainart()
    {
 
        // $name=$type;
        return view('mainart');
    }


    public function Save(Request $request)
  {


    //$path=$request->file('image')->store('images');

         $path=Storage::disk('public')->put('images',$request->file('image'));

         //de ll get

        // $id='7';
        //$picturess = Picture::where('id', '=', $id)->get(['id','name','pic']);
       //  $pictures = Picture::find('9');
         //return response()->json($picturess,200); 

     //   return view('welcome',compact('pictures'));

       //de ll insert  
          $product = new Product;
          $product->name = $request->get('image_name');
          $product->pic = $path;
           $product->description = $request->get('image_description');
           $product->price = $request->get('image_price');


          $product->save();

    
         
        // return view('image',compact('path')); 


    //return response()->json($response,200);
        
        //return $path;

  }
}
