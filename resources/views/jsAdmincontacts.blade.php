
<script>

window.onload = function(){
var contacts = {!! json_encode($contacts->toArray()) !!}; 
var x=true;
 var id;
    if(contacts.length>0)
{
for(var i=0;i<contacts.length;i++)
         
   {
      var ul = document.getElementById("conts");
  var li = document.createElement("li");



      
      var h3 =  document.createElement("h3"); 
          h3.className="agileinfo_header w3layouts_header";
          h3.innerHTML=contacts[i].phone;
          h3.id=contacts[i].id;
          h3.addEventListener('click',function(event) {
            
           
           if(x)
           {
          this.setAttribute("style", "background-color:#a8d7c2;");
          x=false;

          id=this.id;
           document.getElementById("cont_id").value=id;
           } else {
            id=-5;    //constrain to handle b2a
           document.getElementById("cont_id").value=id;
            x=true;

          this.setAttribute("style", "background-color:transperant;");
           }
           console.log(document.getElementById("cont_id").value); 
            });
           
              
            
              
              
           

    li.appendChild(h3);
    

     ul.appendChild(li);
     }
   }

    

 else
        {
               document.getElementById("conts").innerHTML ="Ops,o contacts to show!!";
   
            
        }
        //location.reload();
    }
    
   

  // setTimeout(function(){
  //   },100);

    </script>