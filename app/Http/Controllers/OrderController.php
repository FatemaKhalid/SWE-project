<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Customer;

use Illuminate\Http\Response;

class OrderController extends Controller
{
    public function Submit(Request $request)
  {


          
       //de ll insert  
          $order = new Order;
          $c_id;

           $result=Customer::where('phone',$request->get('tel'))->get();
          if ($result->isEmpty()) { 
          $customer=new Customer;
          $customer->name=$request->get('name');
          $customer->phone=$request->get('tel');
          $customer->address=$request->get('address');
          $customer->email=$request->get('email');
          $customer->save();

          
          $c_id=$customer->id;
          }
          else{
            $c_id=$result[0]->id;
          }
          $order->customer_id=$c_id;
          $order->product_id=$request->get('p_id');
          $order->quantity=$request->get('quantity');
          $order->save();

    
       return back();
        

  }
}
