
                <script>
window.onload = function(){
    
var articles = {!! json_encode($advices->toArray()) !!};  
      
    if(articles.length>0)
    {
      for(var i=0;i<3;i++)
         
   {
  if(i<articles.length){
         var ul = document.getElementById("articles");
  var li = document.createElement("li");

    li.className="lihebata3del";

      var figure =  document.createElement("figure");
          figure.className="txtoverlay";

       var a1 =  document.createElement("a"); 
          a1.setAttribute('href',"#","parent");
          

       var img =  document.createElement("img");
        img.className="hebata3del";
           var s1="storage/";
   
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
      
       
        window.open("{{url('/singleadvice')}}" + "/" + this.id ,"_parent");
              
                 
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

for(var i=3;i<articles.length;i++)
         
   {
 
         var ul = document.getElementById("articles");
  var li = document.createElement("li");

    li.className="lihebata3del2";

      var figure =  document.createElement("figure");
          figure.className="txtoverlay";

       var a1 =  document.createElement("a"); 
          a1.setAttribute('href',"#","parent");
          

       var img =  document.createElement("img");
        img.className="hebata3del1";
           var s1="storage/";
   
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
      
       
        window.open("{{url('/singleadvice')}}" + "/" + this.id ,"_parent");
              
                 
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
 
    else
        {
               document.getElementById("articles").innerHTML ="عفوا لا يوجد مقالات";
   
            
        }
    
   
    }
    
    
    </script>