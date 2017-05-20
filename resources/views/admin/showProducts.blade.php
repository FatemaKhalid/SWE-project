<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--<title>Piccolo Theme</title>-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    
<link rel="icon" href="{!! asset('/assets/images/template_products/logo.png') !!}">

<!-- CSS
================================================== -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{!! asset('css/template_products/bootstrap-responsive.css') !!}">
<link rel="stylesheet" href="{!! asset('css/template_products/bootstrap.css') !!}">
<link rel="stylesheet" href="{!! asset('css/template_products/prettyPhoto.css') !!}">
<link rel="stylesheet" href="{!! asset('css/template_products/flexslider.css') !!}">    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="{!! asset('css/template_products/custom-styles.css') !!}">    
<link rel="stylesheet" href="{!! asset('css/template_products/product-main.css') !!}">     
<link rel="stylesheet" href="{!! asset('css/template_products/product-additional.css') !!}">        
    
     
    

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="{!! asset('js/template_products/bootstrap.js') !!}"></script>
<script src="{!! asset('js/template_products/jquery.prettyPhoto.js') !!}"></script>
<script src="{!! asset('js/template_products/jquery.flexslider.js') !!}"></script>
<script src="{!! asset('js/template_products/jquery.custom.js') !!}"></script>
<script src="{!! asset('js/template_products/jquery.quicksand.js') !!}"></script>

  <script src="{!! asset('js/article.js') !!}"></script>

     


</head>
    
 
<body class="home ">

@extends('layouts.app')

@section('content')
    


   
    
    
    <div class="container">
     <div class="row header"><!-- Begin Header -->
      
     <!-------------Nav Bar----------------- -->


<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->

  <!-- ------------------------------ -->
        </div>

        
    <div class="row gallery-row col-xs-6"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
            
        <!-- Gallery Thumbnails
        ================================================== -->

<div class="row clearfix no-margin">
     <div class="panel panel-default products-panel" id= "Products-panel">
    
   
            <div class="panel-heading ">
                <h3 class="panel-title text-center" >منتجاتنا</h3>
            </div>
        <div class="panel-body panel-body-add" id= "body-products" >
         <ul class="gallery-post-grid holder gallery-add" id= "gallery">
            </ul>

            </div>
         </div>

@include('../admin/jsShowProducts')
            
                    
       <!-- <div class="panel-body" >
           
 <span class="glyphicon glyphicon-earphone"> 01120819478</span>  </div>
</div>-->
 
    </div>
                
                </div>
            </div>
        
        <!--side div for contacts Feryal
            ====================================================-->
    <!-- End Gallery Row -->
        
    
        
       </div> <!-- End Container -->
    
    <!-- Footer Area
        ================================================== -->
<!-- Begin Footer -->
<!--
	<div class="footer-container" >
        
    	<div class="container">
        	

            <div class="row">  
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2012 Piccolo Theme. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Contact</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
-->
    <!-- End Footer --> 
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
        
    @endsection
</body>
</html>
