<!DOCTYPE html>
<html>
		<head>
				<title>article upload</title>
				<link href="https://fonts.googleapis.com/css?family=lato:100" rel="stylesheet" type="text.css">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" >
		</head>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

        <title></title>
    </head>
    <script>
 

   setTimeout(function(){
            //alert("heba");
   
            $.get( "{{route('check_back')}}", function( response ) {

              if (response.login==0) {
                      // alert(response.login);
                        document.location.href="{!! url('/login') !!}";
                    }
                    else
                    {
                     // alert(response.login);
                    $("body").removeClass("hide");
                    }
 
}, "json");
}, 500);
    </script>
		<body style="background-color: #E3EEDE">

@extends('layouts.app')

@section('content')

		 <form method="POST" action="{{ Route('save.advice')}}" enctype="multipart/form-data" class="container">
				 {{ csrf_field() }}
<h1>Advice upload</h1>
				<div class="row text-right" style="margin: 30px;">
				 <div class="col-xs-10 col-xs-offset-1">

					<p style="float: right; margin-left: 20px">: الصورة</p>
						<input type="file" name="image" placeholder="اختر الصورة" style="float: right">
				 </div>
				</div>
				 
				 <div class="row text-right" style="margin: 30px;">
				 <div class="col-xs-10 col-xs-offset-1">
				 <p style="float: right; margin-left: 20px">: اسم المقالة</p>
						<input type="text" name="article_name" placeholder="اكتب اسم المقالة">
				 </div>
				</div>
				 
				 <div class="row text-right" style="margin: 30px;">
				 <div class="col-xs-10 col-xs-offset-1">
						 <div class="form-group">
								<label for="input">المقالة</label>
								<textarea class="from-control" name="content" id="input" rows="10"></textarea>
						 </div>
				 </div>
				</div>
					
				 
				 

				 <div class="row text-center" >
				 <div class="col-xs-10 col-xs-offset-1" style="margin: 20px;">
					 <button type="submit">upload</button>
				 </div>
				</div>
						 
		 </form>


@include('jstext_encode')
@endsection
		</body>

</html>


