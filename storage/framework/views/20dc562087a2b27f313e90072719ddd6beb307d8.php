
                <script>
window.onload = function(){
    
var articles = <?php echo json_encode($articles->toArray()); ?>;  
      
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
           var s1="../storage/";
   
       var s2=articles[i].pic;
       
       var url=s1.concat(s2);
        img.setAttribute('src', url);


       var figcaption =  document.createElement("figcaption");
          figcaption.className="txtcaption";

        var h6 =  document.createElement("h6"); 
          h6.className="heading";
          h6.innerHTML=articles[i].title;

          
        var p = document.createElement("p");
        p.innerHTML=String(articles[i].body).substring(0,50);


        var footer =  document.createElement("footer"); 

        var afooter =  document.createElement("a"); 
          afooter.id = articles[i].id;
          afooter.innerHTML="View Details &raquo;";
           afooter.addEventListener('click',function(event) {
      
       
        window.open("<?php echo e(url('/ArticleSingle')); ?>" + "/" + this.id ,"_parent");
              
                 
            });
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
    
  
    
   
    }
    
    
    </script>