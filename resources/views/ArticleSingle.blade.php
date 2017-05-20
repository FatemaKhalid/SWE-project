<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>

	<title></title>
    <link rel="icon" href="{!! asset('/assets/images/template_products/logo.png') !!}">

	<link rel="stylesheet" type="text/css" href="{!! asset('css/singlearticle.css') !!}">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	
</head>
<body >

@include('nav')

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
<div dir="rtl" class="article" id="body_text">
.
</div>
</div>

@include('jsarticlesingle')
</body>
</html>