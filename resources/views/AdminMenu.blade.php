<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />



    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
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

<!-- ########################################################## -->


			
				<div class="w3_agileits_nav">	
					<!-- <nav class="wthree_nav_menu">
						<ul>
							<li><a href="#" class="icon icon-menu icon-menu-active" id="btn-menu">Menu</a></li>
						</ul>
					</nav> -->
					<div id="sideNav" class="showFullMenu">
						<ul>
							<li><a href="{{ URL::route('viewOrders')}}" class="scroll w3_dlt_art"><span>View-Orders</span></a></li>
							<li><a href="{{ URL::route('insertArticle')}}" class="scroll w3_dlt_art"><span>Upload-Articles</span></a></li>
							<li><a href="{{ URL::route('insertAdvice')}}" class="scroll w3_dlt_art"><span>Upload-Advices</span></a></li>
							<li><a href="{{ URL::route('countriesTodelete')}}" class="scroll w3_dlt_art"><span>Delete-Articles</span></a></li>
							<li><a href="#services" class="scroll w3_dlt_art"><span>Delete-Advices</span></a></li>
							<li><a href="{{ URL::route('addProduct')}}" class="scroll w3_dlt_art"><span>Add-Products</span></a></li>
							<li><a href="{{ URL::route('showProducts')}}" class="scroll w3_dlt_art"><span>Delete/Update-  Products</span></a></li>
							<li><a href="{{ URL::route('contacts')}}" class="sc6roll w3_out"><span>Add/Delete Contact</span></a></li>
							<li><a href="{{ URL::route('changeUserName')}}" class="sc6roll w3_out"><span>Change-User name</span></a></li>
							<li><a href="{{ URL::route('change.pass.form')}}" class="sc6roll w3_out"><span>Change-Password</span></a></li>
						</ul>
					</div>
				
			
			
		</div>
   
<!-- ############################################################# -->
</body>
</html>
