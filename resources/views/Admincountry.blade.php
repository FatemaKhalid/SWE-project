
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <link href="{!! asset('css/layout.css') !!}" rel="stylesheet" type="text/css" media="all">
        <link rel="icon" href="{!! asset('/assets/images/template_products/logo.png') !!}">

       <!-- //custom-theme -->
<link href="{!! asset('css/adminhome/style.less') !!}" rel="stylesheet" type="text/css" media="all" />
<link href="{!! asset('css/adminhome/style.css') !!}" rel="stylesheet" type="text/css" media="all" />

</head>
<!-- <style type="text/css">
  html, body{
   
  overflow-y: auto;
}
</style> -->
  <script src="{!! asset('js/backfix.min.js') !!}"></script> 

<script type="text/javascript">
setTimeout(function(){

  bajb_backdetect.OnBack = function()
    {   
    //  alert("Will take you back to the main page");
      window.history.back=function(){document.location="{!! url('/home') !!}";}
    }

 },200);

</script>
<body>

@extends('layouts.app')

@section('content')

     <div class="container">

     <form action="{{ Route('searchArdticlesAdmin')}}" method="POST">
                     {{ csrf_field() }}
          <div class="w3_agile_mail_grid">
            <span class="input input--ichiro">
              <input class="input__field input__field--ichiro" type="text" name="search" id="input-27" placeholder=" " required="" />
              <label class="input__label input__label--ichiro" for="input-27">
                <span class="input__label-content input__label-content--ichiro">Search articles</span>
              </label>
            </span>
            <input type="submit" value="Search">
          </div>
        
        </form>

<form method="POST" action="{{ Route('showTodelete')}}" enctype="multipart/form-data">
         {{ csrf_field() }}

          <div class="select-style">
         <select name="countries">
  <optgroup label="اختر الدولة">

            @foreach($countries as $key => $country)
              
            <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach

  
  </optgroup>
  </select>
</div>

          <div class="select-style">
<select class="" name="type">
  <optgroup label="اختر نوع المقالة">

            <option value="ترفيهيه">ترفيهيه</option>
              <option value="اجراءات">اجراءات</option>
                <option value="خبرات">خبرات</option>
     
  </optgroup>
  </select>
          </div>
<div class="w3_agile_mail_grid tb_aho">
            <input type="submit" value="Select">
          </div>
     </form>

     @if (count($articles) > 0)


        
    <ul class="nospace group services" id="arts">
  
@include('jsAdminarticles')
    </ul>
    <form role="form" method="POST" action="{{ Route('delArts')}}">
                 {{ csrf_field() }} 
                 <div class="w3_agile_mail_grid">
                  <input type="hidden" name="article_ids" id="article_ids"/>
<div class="w3l_more">
        <input type="submit" class="link link--yaku" value="Delete">
          
                    </div>

        
      
      </form>
    
</div>
@endif

@endsection
</body>
</html>