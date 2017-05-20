<!DOCTYPE html>
<html>
    <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" >

<script src="http://code.jquery.com/jquery-1.8.3.min.js">
  
</script>



        <title></title>
    </head>
    <style type="text/css">
      .row>[class^=col-]{
    padding-top: .75rem;
    padding-bottom: .75rem;
        height: 60px;
    color: #000;
    border: 1px solid rgba(255,255,255,.5);
}

.container2{
  background-color: rgba(86,61,124,.15);
  
  
    padding-left: 15px;
    padding-right: 15px;

    margin: 15px;
   
}

.container1{
  background-color: rgba( 0,0,0,.4);
  
  
    padding-left: 15px;
    padding-right: 15px;

    margin: 15px;
   
}
    </style>

  <!--    <script>
 

   setTimeout(function(){
            //alert("heba");
   
            $.get( "{{route('check_back')}}", function( response ) {

              if (response.login==0) {
                      // alert(response.login);
                        document.location.href="{!! url('/login') !!}";
                    }
                    else
                    {
                     // alert(response.login);
                    $("body").removeClass("hide");
                    }
 
}, "json");
}, 500);
    </script> -->

    <body>
@extends('layouts.app')

@section('content')

@if (count($undelivered_orders) == 0)
<div class="container1">
<div>there is no undilevered orders</div>
</div>
@endif

@if (count($delivered_orders) == 0)
<div class="container2">
<div>there is no dilevered orders</div>
</div>
@endif

   <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
     @foreach($undelivered_orders as $key => $undelivered_order)
<div class="container1">
<div class="row">
  <div class="col-6 col-md-4">Customer name: {{$undelivered_order->c_name}}</div>
  <div class="col-6 col-md-4">Customer phone: {{$undelivered_order->phone}}</div>

  <div class="col-6 col-md-4">Customer email: {{$undelivered_order->email}}</div>
  
</div>

<div class="row">
  <div class="col-6 col-md-4">Customer address: {{$undelivered_order->address}}</div>
 
  <div class="col-6 col-md-4">Product name: {{$undelivered_order->name}}</div>
   <div class="col-6 col-md-4">Product price: {{$undelivered_order->price}} L.E</div>

</div>

<div class="row">
   <div class="col-6 col-md-4">Product id: {{$undelivered_order->product_id}}</div>
  <div class="col-6 col-md-4">Order quantity: {{$undelivered_order->quantity}}</div>
  <div class="col-6 col-md-4" style="padding-top: 2px; padding-bottom: 2px;" >Order id: {{$undelivered_order->id}} <button type="button" class="btn btn-default" style="font-size: 15px; padding: 3.5px 12px; margin-top: 2%;margin-left: 6%" onclick="review({{ $undelivered_order->id }})">click after delivering the order</button></div>
</div>

</div>

@endforeach

@foreach($delivered_orders as $key => $delivered_order)
<div class="container2">
<div class="row">
  <div class="col-6 col-md-4">Customer name: {{$delivered_order->c_name}}</div>
  <div class="col-6 col-md-4">Customer phone: {{$delivered_order->phone}}</div>

  <div class="col-6 col-md-4">Customer email: {{$delivered_order->email}}</div>
  
</div>

<div class="row">
  <div class="col-6 col-md-4">Customer address: {{$delivered_order->address}}</div>
 
  <div class="col-6 col-md-4">Product name: {{$delivered_order->name}}</div>
   <div class="col-6 col-md-4">Product price: {{$delivered_order->price}} L.E</div>

</div>

<div class="row">
  
   <div class="col-6 col-md-4">Product id: {{$delivered_order->product_id}}</div>
  <div class="col-6 col-md-4">Order quantity: {{$delivered_order->quantity}}</div>
  <div class="col-6 col-md-4">Order id: {{$delivered_order->id}}  .  ( This order has been delivered )</div>

</div>

</div>

@endforeach

@include('jstext_encode')
@endsection

<script type="text/javascript">
  
 function review(id)
  {
     
     var urll = "{{url('/reviewOrder')}}" + "/" + id ;

    var jqxhr = $.get( urll, function() {
  
    window.location.href="{!! url('/viewOrders') !!}";

});

  }
</script>
    </body>

</html>
