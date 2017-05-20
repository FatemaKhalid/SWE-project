
                <script>
window.onload = function(){
var articles = {!! json_encode($articles->toArray()) !!}; 
var IDstodelete=new Array();
var m=articles.length;
console.log(m);
    if(articles.length>0)
{
for(var i=0;i<articles.length;i++)
         
   {
      var ul = document.getElementById("arts");
  var li = document.createElement("li");

 li.className="one_third yoo";

      var article =  document.createElement("article");
       var s1="../../storage/";
   
       var s2=articles[i].pic;
       
       var url=s1.concat(s2);
 article.style.backgroundImage = "url('"+url+"')";
 
      var h6 =  document.createElement("h6"); 
          h6.className="heading";
          h6.innerHTML=articles[i].title;

       
        var p = document.createElement("p");
        p.innerHTML= String(articles[i].body).substring(0,80)+"...";


        var footer =  document.createElement("footer"); 

        var afooter =  document.createElement("a");
        afooter.id = articles[i].id;
         console.log(articles[i].id);
          afooter.className="btn";
          afooter.innerHTML="Select &raquo;";
           afooter.addEventListener('click',function(event) {
            
           	var c=IDstodelete.indexOf(this.id);
              if(c<0)
              {
                this.innerHTML="UnSelect &raquo;";
               IDstodelete.push(this.id);

              }
              else {
          this.innerHTML="Select &raquo;";
                IDstodelete.splice(c, 1);
          }
           console.log(IDstodelete);   

           document.getElementById("article_ids").value=IDstodelete;   
            });
              
              
           

    article.appendChild(h6);
    article.appendChild(p); 
    footer.appendChild(afooter);
    article.appendChild(footer); 
    li.appendChild(article);

     ul.appendChild(li);
     }
    }

 else
        {
               document.getElementById("arts").innerHTML ="عفوا لا يوجد مقالات";
   
            
        }
    }
    
    
    </script>