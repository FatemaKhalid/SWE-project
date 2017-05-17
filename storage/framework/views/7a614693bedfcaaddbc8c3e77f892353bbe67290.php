<!DOCTYPE html>
<html>
<head>


	<title></title>

<!-- nav bar -->
  <link rel="stylesheet" type="text/css" href="<?php echo asset('css/africa.css'); ?>">



<!-- end nav bar -->



	<style>
#demo {
 
    color: #fff;
    font-size: 25px;
    
    margin-top: 100px;
}
.x{
   display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
      -webkit-align-items: center;
    align-items: center;
    
}
	</style>

 <script>
  


window.onload = function(){
	
	
	
  var continent = <?php echo json_encode($continent->toArray()); ?>;
 
   
      var countries=<?php echo json_encode($continent->countries->toArray()); ?>;
       if(countries.length>0)
    {
      for(var i=0;i<countries.length;i++)
      {
         

         var ul = document.getElementById("list");
  var li = document.createElement("li");
      var a = document.createElement("a");
   a.className="myButton";
 //  a.text=getQueryVariable("id");
   a.text= countries[i].name;
   a.id =countries[i].id;
  
   a.onclick=function(event) {
      
        
       
        window.open("<?php echo e(url('/articles')); ?>" + "/" + event.target.id ,"_parent");
          //window.location.href="page2.php?name="+a.id;
            }


    li.appendChild(a);
    ul.appendChild(li);
  
      }
 }
     else
     {

      document.getElementById("demo").innerHTML ="!تلك القارة لا تحتوى على مقالات";
      
     
     }



  
}

/*function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}*/
    </script>



</head>
<body>


<div id="body">

 
<ul class="heba" id="list">


 
</ul>

<div class="x">
<p id="demo" ></p>
</div>

</div>
</body>
</html>

