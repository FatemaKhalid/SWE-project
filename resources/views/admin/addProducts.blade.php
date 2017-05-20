<!DOCTYPE html>
<html>
    <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" >

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

        <title></title>
    </head>

    <body>
@extends('layouts.app')

@section('content')

     <form method="POST" action="{{ Route('saveProduct')}}" enctype="multipart/form-data" class="container">
         {{ csrf_field() }}

 <div class="form-group" class="row text-right" style="margin: 30px;">
 
         <div class="col-xs-10 col-xs-offset-1">
    <label for="product-name" style="float: right;">اسم المنتج </label>
    <input type="text" class="form-control" name= "name" id="name" placeholder="مثال: حقيبة سفر " required= "true">
  </div>
  </div>
         
       
         
         <div class="row text-right" style="margin: 30px;">
         <div class="col-xs-10 col-xs-offset-1">
             <div class="form-group">
                <label for="input">وصف للمنتج</label>
                <textarea class="from-control" name="content" id="content"  rows="10"></textarea>
             </div>
         </div>
        </div>
          

          
        <div class="form-group" class="row text-right" style="margin: 30px; ">
        
         <div class="col-xs-10 col-xs-offset-1" >

         
    <label for="product-price" style=" float: right">سعر المنتج</label>
            <div class="input-group" style="clear: both;"> 
        <span class="input-group-addon">L.E</span>
    <input type="number" class="form-control currency" min="0" step="0.01" name= "price" id="price" placeholder="1000.00" required= "true">
  </div>
         </div>
         </div>
         
<div style="margin : 20px;"></div>
          <div class="form-group" class="row text-right" >
          <div class="col-xs-10 col-xs-offset-1" style="margin: 30px; ">
    <label for="product-image" style="float: right;">صورة للمنتج </label>
    <input type="file" name= "image" id="image" required= "true" style="float: right;" >
  </div>
  </div>
         
      <div class="row text-center" >
         <div class="col-xs-10 col-xs-offset-1" style="margin: 20px;">
         <button type="submit">إضافة المنتج</button>
         </div>
         </div>
     </form>


@include('jstext_encode')
@endsection
    </body>

</html>
