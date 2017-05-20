<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- //custom-theme -->
<link href="{!! asset('css/adminhome/style.less') !!}" rel="stylesheet" type="text/css" media="all" />
<link href="{!! asset('css/adminhome/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
        <link href="{!! asset('css/layout.css') !!}" rel="stylesheet" type="text/css" media="all">
    
</head>
<body>


@extends('layouts.app')


		<div class="container">


     <form action="{{ Route('AdminadvicesSearch')}}" method="POST">
                     {{ csrf_field() }}

				<div class="w3_agile_mail_grid">
            <span class="input input--ichiro">
              <input class="input__field input__field--ichiro" type="text" name="search" id="input-27" placeholder=" " required="" />
              <label class="input__label input__label--ichiro" for="input-27">
                <span class="input__label-content input__label-content--ichiro">Search articles by title</span>
              </label>
            </span>
            <input type="submit" value="Search">
          </div>
				
				</form>

    <ul class="nospace group services" id="advs">
  
@include('jsAdminAdvices')
    </ul>

<form role="form" method="POST" action="{{ Route('delAdvs')}}">
                 {{ csrf_field() }} 
                 <div class="w3_agile_mail_grid">
                  <input type="hidden" name="advices_ids" id="advices_ids"/>
<div class="w3l_more">
        <input type="submit" class="link link--yaku" value="Delete">
          
                    </div>

        
      
      </form>
</div>


</body>
</html>