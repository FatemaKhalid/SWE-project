<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

	<title></title>
	<link rel="stylesheet" type="text/css" href="{!! asset('css/singlearticle.css') !!}">
	
</head>
<body>


<div class="float_the_like">
<button>
<img src="{!! asset('/assets/images/heart_black.png')!!}">
	
</button>	


</div>



<div class="center">
<p dir="rtl" class="title" id="title_text">
.
</p>


	<div  class="adj_image">
	<img src="{!! asset('/assets/images/apples.jpg')!!}" title="اننننن ااا ييس" alt="للل للل لت ليي">
	</div>

<div class="clear"></div>
<p dir="rtl" class="article" id="body_text">
.
<p>
</div>
<script >
	window.onload = function(){

var article = {!! json_encode($article->toArray()) !!};
    

    
    	var body1 = document.getElementById("body_text");

    	var title1 = document.getElementById("title_text");

		
        title1.innerHTML=article[0].title;
    	body1.innerHTML = article[0].body;

   
	}
</script>

</body>
</html>