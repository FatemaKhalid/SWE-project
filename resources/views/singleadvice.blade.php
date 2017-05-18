<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>

	<title></title>
    <link rel="icon" href="{!! asset('/assets/images/template_products/logo.png') !!}">

	<link rel="stylesheet" type="text/css" href="{!! asset('css/singlearticle.css') !!}">
<link rel="stylesheet" href="{!! asset('css/navproduct.css') !!}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	
</head>
<body >


@include('navAdvices')   


<div class="center">
<b id="title_text" dir="rtl" class="title" >
.
</b>

<div class="clear"></div>
	<div  class="adj_image">
	<img src="about:blank" id="article_img">
	</div>


<div class="clear"></div>


<img id="image_hover" src="{!! asset('/assets/images/heart_black.png')!!}" onmouseover="onHover();" 
      onmouseout="offHover();" onclick="clickfn()" class="float_heart">

<p id="likes_text" class="float_right">
	.
</p>

<div class="clear"></div>
<p dir="rtl" class="article" id="body_text">
.
<p>
</div>

@include('jsadvicesingle')
</body>
</html>