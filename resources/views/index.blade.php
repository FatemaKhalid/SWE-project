<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{!! asset('css/index.css') !!}">


	<style>
* {
  margin: 0;
  padding: 0;
}

/* 
			set overflow-y property to prevent scroll bar mess up the whole layout
		*/  

body {
  margin: 0;
  padding: 0;
  overflow-y: hidden;
  color: #fff;
}

li { list-style-type: none; }

/* styled just for clear visual division of each areas */


#radioWrap {
  width: 20px;
  height: 180px;
  position: absolute;
  right: 5%;
  top: 50%;
  margin-top: -90px;
}

#radio {
  width: 100%;
  height: 100%;
  overflow: hidden;
}

#radio li {
  width: 20px;
  height: 20px;
  background-color: rgba(255,255,255, 0.5);
  text-indent: -10000px;
  border-radius: 50%;
  margin-top: 12px;
  cursor: pointer;
}

#radio li:first-child { margin-top: 0; }

/* 
			set position to absolute(essential).
			use margin to adjust gaps between LIs because ApplikeOnePage.js uses .outerHeight(true) method
			to measure the interval gap to which each radio buttons are placed.
		*/
#container{
width:100vw;
height:100vh;

}
#radioOn {
  width: 20px;
  height: 20px;
  margin-bottom: 12px;
  position: absolute;
  top: 0;
  left: 0;
  background-color: #fff;
  border-radius: 50%;
}
.tooltiptext {
    visibility: hidden;
    width: 120px;
     background-color:#fff;
    color: #c42c45;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
	right:40px;
	
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
	 color: #c42c45;
	 text-indent: 0;
	 
}

.tooltiptext1 {
    visibility: hidden;
    width: 120px;
   background-color:#fff;
    color: #c42c45;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
	right:40px;
	
    z-index: 1;
}

.tooltip1:hover .tooltiptext1 {
    visibility: visible;
	 color: #c42c45;
	 text-indent: 0;
	 
}


.op-section {
 display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
      -webkit-align-items: center;
    align-items: center;}

.second { background-color: #55a;  display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
      -webkit-align-items: center;
    align-items: center;}

.third {background-color:#dbe0ea;
 display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
      -webkit-align-items: center;
    align-items: center;
}


.fourth { 
  background-color: #85C3B6;
}

.fifth { background-color: #aae; }

.last { background-color: #aaf; }

.parent {
 
}


</style>
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="{!! asset('js/onepage.js') !!}"></script>
	<script>
		$(document).ready(function(){
			startOnePage({
				frame: "#view",
				container: "#frame",
				sections: ".op-section",
				radio: "#radio",
				radioOn: "#radioOn",
				speed: 500,
				easing: "swing"
			});
		});
	</script>
	</head>
	<body>
<div id="view">
      <div id="frame">
    <div class="op-section">

<script>
setTimeout(function () {
$('#container').load("{{ Route('yarab')}}");
   //window.location.href = "h/heba/yarab.php"; //will redirect to your blog page (an ex: blog.html)
}, 3000);
</script>

<script>
function advices(){
	    
             //  window.location.replace("page2.php?name="+a.id);
             //htt3`yer hnro7 lsaf7a advices
			   window.open("{{ URL::route('articles', array('count_name' => 'advices')) }}","_parent");
			   
			    //window.location.href="page2.php?name="+a.id;
            }
</script>
	<div id="container">
		<img class="logo" src="{!! asset('/assets/images/logo.png')!!}">
		<div class="circ one"></div>
	</div>

        </div>
    <div class="op-section second"><img id="myImg" src="{!! asset('/assets/images/travel-book.jpg')!!}" height="100%"
	width="100%" onclick="advices()"></div>
    <div class="op-section third">
	
	<img id="myImg" src="http://68.media.tumblr.com/3a9f5ee86b84e38a8659c9010c2aeb02/tumblr_n47ahupEuE1rk6ocoo1_500.gif" height="300px"
	width="550px" onclick="advices()">
	
	
</div>
    <div class="op-section fourth">
   
      <img class="box1" src="{!! asset('/assets/images/art1.jpg')!!}" >
    
    <div class="box2">
      <!-- ################################################################################################ -->
    <article class="btmspace-50">
      <p class="nospace">احنا شباب بنحب السفر هدفنا تغير ثقافه المجتمع عن السفر و انه مش للرفاهيه او مقتصر علي فئه معينه 
او انك محتاج مبالغ خرافيه علشان تسافر او محتاج ملايين علشان تطلع فيزا مهمتنا ببساطه اننا نساعدكوا فى كل حاجه خاصه بالسفر</p>
<p class="nospace">
احنا سافرنا كتير و عندنا تجارب و مغامرات كتير وهنقولكوا خلاصه تجاربنا علشان نفيدكم بيها 
هنقولكوا كمان  ازاى ماتعمدوش علي حد و تحجزوا ارخص تذاكر طيران وازاى تختار فندق صح فى مناطق امان وكمان هنقولك ازاى تاخد التأشيرة صح ومتاخدش رفض خالص </p>
    </article>
    <article>
      <p class="nospace">
وفى الاخر ازاى تعرف تسمتع بالرحله بجد و تجرب كل جديد و مختلف في البلد اللي انت هتزورها و تشوفها بعين مغامر مسافر مش بس سائح عادي بيشوف مجرد معالم</p>
    </article>
    </div>

   </div>
  </div>
    </div>
<div id="radioWrap">
      <ul id="radio">
    <li class="tooltip"><span class="tooltiptext">مقالات</span></li>
    <li class="tooltip"><span class="tooltiptext">نصائح سفر</span></li>
    <li class="tooltip"><span class="tooltiptext">منتجات</span></li>
    <li class="tooltip"><span class="tooltiptext">نبذة عنا</span></li>
   
  </ul>
      <span id="radioOn" class="tooltip1">
	    <span class="tooltiptext1" id="t">مقالات</span>
</span>

	  </div>
	  

	  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>