
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






window.onload = function(){

  var articles = {!! json_encode($articles->toArray()) !!};  
      
    if(articles.length>0)
    {
      for(var i=0;i<articles.length;i++)
         
{
         var ul = document.getElementById("articles");
  var li = document.createElement("li");


      var figure =  document.createElement("figure");
          figure.className="txtoverlay";

       var a1 =  document.createElement("a"); 
          a1.setAttribute('href',"#","parent");
          

       var img =  document.createElement("img");
          img.setAttribute('src',imgsrc[i%3]);

       var figcaption =  document.createElement("figcaption");
          figcaption.className="txtcaption";

        var h6 =  document.createElement("h6"); 
          h6.className="heading";
          h6.innerHTML="نباتات";

          
        var p = document.createElement("p");
        p.innerHTML="هنا القاهرة الصامدة الجامدة التي لم يجدها في قلب صحراء الجوهرة مصر الا الحقراء و الطامعون.";


        var footer =  document.createElement("footer"); 

        var afooter =  document.createElement("a"); 
          afooter.innerHTML="View Details &raquo;";
          afooter.setAttribute('href',"#","parent");

        a1.appendChild(img); 
    figcaption.appendChild(h6);
    figcaption.appendChild(p);
    footer.appendChild(afooter);
    figcaption.appendChild(footer); 
    figure.appendChild(a1); 
    figure.appendChild(figcaption);
    li.appendChild(figure);

     ul.appendChild(li);
}
}
    
   };


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction(e) {
   var drp=document.getElementById(e), maxH="visible";
   if(drp.style.visibility == maxH)
   {
    drp.style.visibility="hidden";
   } else {
    drp.style.visibility=maxH;

   }
}

function srch(f) {
   var inpt=document.getElementById(f), maxW='197px';
   if(inpt.style.visibility == 'hidden')
   {
    inpt.style.width=maxW;

    inpt.style.visibility='visible';

   } else {
    inpt.style.width='0px';

    inpt.style.visibility='hidden';
        /***********htt3dl********/
   }
}


