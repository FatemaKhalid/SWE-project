<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{!! asset('css/layout.css') !!}" rel="stylesheet" type="text/css" media="all">
        <link rel="icon" href="{!! asset('/assets/images/template_products/logo.png') !!}">

       <!-- //custom-theme -->
<!-- <link href="{!! asset('css/adminhome/style.less') !!}" rel="stylesheet" type="text/css" media="all" /> -->
<link href="{!! asset('css/adminhome/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{!! asset('js/jquery-2.1.4.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/adminhome/bars.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/adminhome/gnmenu.js') !!}"></script>
<!-- //js -->
<link rel="stylesheet" href="{!! asset('css/adminhome/flexslider.css') !!}" type="text/css" media="screen" property="" />
<!-- gallery -->
<link rel="stylesheet" href="{!! asset('css/adminhome/lightGallery.css') !!}" type="text/css" media="all" />
<!-- //gallery -->
<!-- font-awesome-icons -->
<link href="{!! asset('css/adminhome/font-awesome.css') !!}" rel="stylesheet"> 

</head>
<body>

		<div class="container">


				
    <ul class="nospace group services" id="arts">
  
@include('jsAdminarticles')
    </ul>
    <form role="form" method="POST" action="{{ Route('delArts')}}>
                 {{ csrf_field() }}	
<div class="w3l_more">
				<a href="#" class="link link--yaku" type="submit">
					<span>D</span><span>e</span><span>l</span><span>e</span><span>t</span><span>e</span> 
				</a>
			</div>
			</form>
    
</div>
</body>
</html>