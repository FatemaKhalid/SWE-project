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
  <link rel="stylesheet" type="text/css" href="{!! asset('css/navproduct.css') !!}">


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
<style>
.modal-header .close
{
float:left;
}
.modal-footer .myButton
{
float:left;
}

.modal-dialog {
    width: 100%;

    margin: 0px;
}

.modal {
    /* position: fixed; */
    /* top: 0; */
    right: 0;
    bottom: initial;
    /* left: 0; */
    /* z-index: 1050; */
    /* display: none; */
    /* overflow: hidden; */
    -webkit-overflow-scrolling: touch;
    outline: 0;
}
input[type="text"],input[type="number"], input[type="email"]{
    height: 30px;
    /* padding: 4px 6px; */
    margin-bottom: 0px;

}
</style>
<body>


	
<!-- Modal -->
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal" float="left">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only" ></span>
                </button>
                <h4 class="modal-title" id="myModalLabel" align=right>
                   : املا بياناتك وسيتم التواصل معك من خلال احد افراد خدمة العملاء
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form" method="POST" action="{{ Route('submitorder')}}">
                 {{ csrf_field() }}
      <input type="hidden" name="p_id" value="{{ $product->id }}">
                 <div class="form-group" align=right>
	
      <label for="name">: الاسم</label>
      <input type="text" class="form-control" name="name" required >
    </div>
	

    <div class="form-group" align=right>
	
      <label for="email">: البريد الالكترونى</label>
      <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group" align=right>
      <label for="tel" >: رقم التليفون</label>
      <input type="text" class="form-control" name="tel" required >
    </div>
    <div class="form-group" align=right>
      <label for="address">: العنوان</label>
      <input type="text" class="form-control" name="address" required>
    </div>
	    <div class="form-group" align=right>
      <label for="quantity">: الكمبة المطلوبة من المنتج</label>
	  <input type="number" class="form-control" id="quantity" name="quantity" min="1" max="5" required>
      
    </div>
	
          <button type="submit" class="myButton" >ارسال</button>
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                
                
            </div>
        </div>
    </div>
</div>

	
	
    
    <div class="container main-container">
 

      <div class="row header"><!-- Begin Header -->
      
    
        
        
        <!-- Main Navigation
        ================================================== -->

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
        <li class="active"><a href="{{ Route('index')}}"><img src="{!! asset('/assets/images/home.png')!!}" class="im"> <span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="#"><img class="im" src="{!! asset('/assets/images/search.png')!!}" class="srch" ></a></li> -->
        
      </ul>

    

      <form class="navbar-form navbar-left" method="POST" action="{{ Route('search')}}">
                 {{ csrf_field() }}
        <div class="form-group" id="cont">
          <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default"><img src="{!! asset('/assets/images/search.png')!!}" class="srch" ></button>
      </form>

        <img src="{!! asset('/assets/images/logo.png')!!}" alt="Brand" class="navbar-brand im logo" id="lo">


   
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container -->
  
</nav>


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
                        <li align=right style="font-size: 18px;"><h6 align=right style="font-size: 18px;">السعر</h6> : <span id="price" align=right> .  </span><span id="3omla" align=right>.</span></li>
                        <li align=right style="font-size: 18px;"><h6 align=right id="availabillity" style="font-size: 18px;">.</h6></li>
                        
                    </ul>

                    <button class="myButton" data-toggle="modal" data-target="#myModalNorm">اطلب المنتج</button>

                    
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
    
</body>

<script type="text/javascript">
  window.onload = function(){
  
  
 var product = {!! json_encode($product->toArray()) !!};


         var product_image=document.getElementById("product_image");
        
         var product_name = document.getElementById("product_name");
  
         var discription = document.getElementById("discription");

         var omla = document.getElementById("price");

         var price = document.getElementById("3omla");

         var availability = document.getElementById("availabillity");

      var s1="../storage/";
   
       var s2=product.pic;
       
       var url=s1.concat(s2);
        product_image.setAttribute('src', url);
         product_name.innerHTML =product.name;
      
      discription.innerHTML =product.description;
      omla.innerHTML =product.price;
      price.innerHTML =" جنيه ";

      if(product.soldout==1)
      availability.innerHTML ="غير متوفر";

      else{
         availability.innerHTML ="متوفر";
      }
  
}
</script>


</html>
