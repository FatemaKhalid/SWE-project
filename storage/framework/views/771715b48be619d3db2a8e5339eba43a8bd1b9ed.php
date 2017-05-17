<!doctype html>
<html>
<head>
<title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo asset('css/navbar.css'); ?>">
<style>
body{
	background-color:#FFFfff;
}


 
</style>
<script>
window.onload=function()
{
	 

	 if(getQueryVariable("name")=="0")
	   {
		   
 //alert('clicked');
/*	for (var i=0;i<3;i++) {
              //do some stuff 
   var ul = document.getElementById("list");
  var li = document.createElement("li");
      var a = document.createElement("a");
   a.text="مصر";
  

    li.appendChild(a);
    ul.appendChild(li);
	
	   }*/
	   
	   }
	 

}

function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction(e) {
   var drp=document.getElementById(e), maxH="visible";
   if(drp.style.visibility== maxH)
   {
   	drp.style.visibility="hidden";
   } else {
   	drp.style.visibility=maxH;

   }
}
</script>

</head>
<body>
<div id="body">

<!-- nav bar -->
	<div class="nav">
<nav>
	<ul class="leftnav">
	<li class="lefticon"><img src="<?php echo asset('/assets/images/home.png'); ?>" class="im"></li>
		<li class="lefticon"><img class="im" src="<?php echo asset('/assets/images/search.png'); ?>" class="srch" ></li>	
	</ul>
	<img src="<?php echo asset('/assets/images/logo.png'); ?>" class="im logo">


	<ul class="rightnav">
		<li class="righticon ">
		<img src="<?php echo asset('/assets/images/menu.png'); ?>" onclick="myFunction('myDropdown')" class="im dropbtn">
		 </li>

   

	</ul>
	</nav>
		 <div class="dropdown-content" id="myDropdown">
      <a  href="#">ترفيهية</a>
      <a  href="#">خبرات</a>
      <a  href="#">اجراءات</a>
    </div>


</div>

<!-- ----- -->

<!-- lltagroba -->
<ul class="heba" id="list">

</ul>



</div>
</body>
</html>