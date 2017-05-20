
                <script>
window.onload = function(){
var advices = {!! json_encode($advices->toArray()) !!}; 
var IDstodelete=new Array();
var m=advices.length;
console.log(m);
    if(advices.length>0)
{
for(var i=0;i<advices.length;i++)
         
   {
      var ul = document.getElementById("advs");
  var li = document.createElement("li");

 li.className="one_third";

      var article =  document.createElement("article");
       var s1="../../storage/";
   
       var s2=advices[i].pic;
       
       var url=s1.concat(s2);
 article.style.backgroundImage = "url('"+url+"')";
 
      var h6 =  document.createElement("h6"); 
          h6.className="heading";
          h6.innerHTML=advices[i].title;

       
        var p = document.createElement("p");
        p.innerHTML= String(advices[i].body).substring(0,80)+"...";


        var footer =  document.createElement("footer"); 

        var afooter =  document.createElement("a");
        afooter.id = advices[i].id;
         console.log(advices[i].id);
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
           document.getElementById("advices_ids").value=IDstodelete;      
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
               document.getElementById("advs").innerHTML ="عفوا لا يوجد مقالات";
   
            
        }
    }
    
    
    </script>