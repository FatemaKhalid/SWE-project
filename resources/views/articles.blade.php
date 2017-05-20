<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="http://getbootstrap.com.vn/examples/equal-height-columns/equal-height-columns.css" /> -->
        <link href="{!! asset('css/layout.css') !!}" rel="stylesheet" type="text/css" media="all">
        <link rel="icon" href="{!! asset('/assets/images/template_products/logo.png') !!}">

</head>
<body>


    @include('nav')
<div class="wrapper">
  <section id="latest" class="container clear"> 
    <!-- ################################################################################################ -->
  
    <ul class="nospace group" id="articles">
      


@include('jsArticleMain')
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{!! asset('js/jquery.min.js') !!}"></script>
<script src="{!! asset('js/jquery.backtotop.js') !!}"></script>
<script src="{!! asset('js/jquery.mobilemenu.js') !!}"></script>

</body>
</html>