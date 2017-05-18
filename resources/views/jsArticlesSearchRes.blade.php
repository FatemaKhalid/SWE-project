<script>
window.onload = function(){
    
var articles_s = {!! json_encode($articles_s->toArray()) !!};  
      
    if(articles_s.length>0)
    {
      for(var i=0;i<articles_s.length;i++)
         
{
         var ul = document.getElementById("articles");
  var li = document.createElement("li");
li.className="lihebata3del2";

      var figure =  document.createElement("figure");
          figure.className="txtoverlay";

       var a1 =  document.createElement("a"); 
          a1.setAttribute('href',"#","parent");
          

       var img =  document.createElement("img");
           var s1="../storage/";
   
       var s2=articles_s[i].pic;
       
       var url=s1.concat(s2);
        img.setAttribute('src', url);
img.className="hebata3del1";

       var figcaption =  document.createElement("figcaption");
          figcaption.className="txtcaption";

        var h6 =  document.createElement("h6"); 
          h6.className="heading";
          h6.innerHTML=articles_s[i].title;

          
        var p = document.createElement("p");
        p.innerHTML=String(articles_s[i].body).substring(0,50);


        var footer =  document.createElement("footer"); 

        var afooter =  document.createElement("a"); 
          afooter.id = articles_s[i].id;
          afooter.innerHTML="View Details &raquo;";
           afooter.addEventListener('click',function(event) {
      
       
        window.open("{{url('/singlearticle')}}" + "/" + this.id+ "/" +"{{$count_id}}" ,"_parent");
              
                 
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
 