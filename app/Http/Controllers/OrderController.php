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
          $customer->c_name=$request->get('name');
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

   public function view()
    {
    
            $undelivered_orders=Order::join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('orders.*', 'products.name','products.price','customers.c_name', 'customers.phone','customers.email','customers.address')
             ->where('orders.delivered',0)
            ->get();
            $delivered_orders=Order::join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('products', 'orders.product_id', '=', 'products.id')->select('orders.*', 'products.name','products.price','customers.c_name', 'customers.phone','customers.email','customers.address')
             ->where('orders.delivered',1)
            ->get();

            //return $delivered_orders;
        
      return view('admin.viewOrders',compact('undelivered_orders','delivered_orders'));
       // return response()->json( $undelivered_orders);
      
    }

     public function review($order_id)
    {
    
        Order::where('id', $order_id)->update(['delivered' => 1]);
        
       
        return back();
      
    }


}
