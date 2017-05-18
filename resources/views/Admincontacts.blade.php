<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{!! asset('css/layout.css') !!}" rel="stylesheet" type="text/css" media="all">
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
		<ul class="" id="conts">

		@include('jsAdmincontacts')
    </ul>

  
		<!-- contact -->
			
				<form role="form" method="POST" action="{{ Route('add_contact')}}">
                 {{ csrf_field() }}	
					<div class=" w3_agile_mail_grid">
						<span class="input input--ichiro">
						
							<input class="input__field input__field--ichiro" name="contact"  id="input-27" placeholder=" " required="" />
							<label class="input__label input__label--ichiro" for="input-27">
								<span class="input__label-content input__label-content--ichiro">Type New Contact</span>
							</label>
						</span>
						<input type="submit" value="Add">
					</div>

				</form>

					<form role="form" method="POST" action="{{ Route('delete_contact')}}">
					 {{ csrf_field() }}
					<div class="w3_agile_mail_grid">
                
                 <input type="hidden" name="cont_id" id="cont_id">
						<input type="submit" value="Delete" name="Delete">
						</div>

					</form>
				

					<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->


    
</body>
</html>