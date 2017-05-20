<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{!! asset('css/template_products/bootstrap.css') !!}">
<link rel="stylesheet" href="{!! asset('css/template_products/bootstrap-responsive.css') !!}">
<link rel="stylesheet" href="{!! asset('css/template_products/prettyPhoto.css') !!}" />
<link rel="stylesheet" href="{!! asset('css/template_products/custom-styles.css') !!}">
<link rel="stylesheet" href="{!! asset('css/template_products/product.css') !!}">
 

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="icon" href="{!! asset('/assets/images/template_products/logo.png') !!}">
<link rel="apple-touch-icon" href="{!! asset('/assets/images/template_products/apple-touch-icon.png') !!}">
<link rel="apple-touch-icon" sizes="72x72" href="{!! asset('/assets/images/template_products/apple-touch-icon-72x72.png') !!}">
<link rel="apple-touch-icon" sizes="114x114" href="{!! asset('/assets/images/template_products/apple-touch-icon-114x114.png') !!}">

<!-- JS
================================================== -->

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="{!! asset('js/template_products/jquery.easing.1.3.js') !!}"></script>
<script src="{!! asset('js/template_products/bootstrap.js') !!}"></script>
<script src="{!! asset('js/template_products/jquery.prettyPhoto.js') !!}"></script>
<script src="{!! asset('js/template_products/jquery.quicksand.js') !!}"></script>
<script src="{!! asset('js/template_products//jquery.custom.js') !!}"></script>
  <script src="{!! asset('js/article.js') !!}"></script>



</head>

<body>
    
@extends('layouts.app')

@section('content')
<!-- Modal -->
    @include('../admin/updateModal')
    @include('../admin/changePic')
    @include('../admin/delProduct')

	


    
    <div class="container main-container">
 

      <div class="row header"><!-- Begin Header -->
      
    
        
        
        <!-- Main Navigation
        ================================================== -->

        <!-------------Nav Bar----------------- -->

  

  <!-- ------------------------------ -->
    
      </div><!-- End Header -->
     
    <!-- Page Content
    ================================================== --> 
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery-single">

            <div class="row">
                <div class="span6" style="margin-left:10px;">
                    <img src="about:blank" id="product_image" class="align-left thumbnail" alt="image">
                </div>
                <div class="span6">
                    <h2 id="product_name" align=right style="margin-right:15px;">.</h2>
                    <p class="lead" align=right id="discription" style="margin-right:15px;">.</p>

                    <ul class="project-info" align=right style="margin-right:5px;">
                        <li align=right style="font-size: 18px;"><h6 align=right style="font-size: 18px;">السعر</h6> : <span id="3omla" align=right></span> <span id="price" align=right>جنيه</span></li>
                        <li align=right style="font-size: 18px;"><h6 align=right id="availabillity" style="font-size: 18px;">.</h6></li>
                        
                    </ul>
                    
                    <button class="myButton" data-toggle="modal" data-target="#changePicModal">تغيير صورة المنتج </button>
                    <button class="myButton" data-toggle="modal" data-target="#updateModal">تعديل المنتج </button>
                    <button class="myButton" data-toggle="modal" data-target="#delModal">حذف المنتج</button>

                    
                </div>
            </div>

        </div><!-- End gallery-single-->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->


    <!-- Footer Area
        ================================================== -->
     <!-- End Footer -->

    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    @endsection
</body>

<script type="text/javascript">
  window.onload = function(){
  
  
 var product = {!! json_encode($product->toArray()) !!};


         var product_image=document.getElementById("product_image");
        
         var product_name = document.getElementById("product_name");
  
         var discription = document.getElementById("discription");

//         var omla = document.getElementById("price");

         var price = document.getElementById("3omla");

         var availability = document.getElementById("availabillity");

      var s1="../storage/";
   
       var s2=product.pic;
       
        var url=s1.concat(s2);
        product_image.setAttribute('src', url);
         product_name.innerHTML =product.name;
      
      discription.innerHTML =product.description;
      price.textContent =product.price;
//      omla.innerHTML =" جنيه ";

      if(product.soldout==1)
      availability.innerHTML ="غير متوفر";

      else{
         availability.innerHTML ="متوفر";
      }
  
}
</script>


</html>
