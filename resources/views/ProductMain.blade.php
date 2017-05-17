<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--<title>Piccolo Theme</title>-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    
<link rel="stylesheet" href="{!! asset('css/navproduct.css') !!}">        
    

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

    
    <div class="container">
     <div class="row header"><!-- Begin Header -->
      
     <!-------------Nav Bar----------------- -->

<nav class="navbar navbar-static-top" style="background-color: #fff; height: 20%">
  <div class="container2">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- 
    <div class="navbar-collapse collapse navbar-responsive-collapse"></div> -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><img src="{!! asset('/assets/images/home.png')!!}" class="im"> <span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="#"><img class="im" src="{!! asset('/assets/images/search.png')!!}" class="srch" ></a></li> -->
        
      </ul>

    

      <form class="navbar-form navbar-left">
        <div class="form-group" id="cont">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" onclick="srch('cont')"><img src="{!! asset('/assets/images/search.png')!!}" class="srch" ></button>
      </form>

        <img src="{!! asset('/assets/images/logo.png')!!}" alt="Brand" class="navbar-brand im logo" id="lo">


   
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container -->
  
</nav>


  <!-- ------------------------------ -->
        </div>
           
<div class="contacts-container col-xs-6">
        <div class="panel panel-default " id= "contacts-panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">اتصل بنا </h3>
            </div>
         </div>
    </div>
        
    <div class="row gallery-row col-xs-6"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
            
        <!-- Gallery Thumbnails
        ================================================== -->

<!--<div class="row clearfix no-margin">-->
     <div class="panel panel-default products-panel" id= "Products-panel">
    
   
            <div class="panel-heading ">
                <h3 class="panel-title text-center" >منتجاتنا</h3>
            </div>
        <div class="panel-body panel-body-add" id= "body-products" >
         <ul class="gallery-post-grid holder gallery-add" id= "gallery">
            </ul>

            </div>
         </div>

@include('jsProductMain');
            
                    
       <!-- <div class="panel-body" >
           
 <span class="glyphicon glyphicon-earphone"> 01120819478</span>  </div>
</div>-->
 
<!--    </div>-->
                
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
        
    
</body>
</html>
