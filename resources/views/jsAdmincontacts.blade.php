
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
          x=false;

          id=this.id;
          // var contacts_all=document.getElementsByClassName("agileinfo_header w3layouts_header");
          // for(var i = 0; i < contacts_all.length; i++)
          // {
          //  contacts_all.item(i).style.backgroundColor="transperant";
          // }
          this.setAttribute("style", "background-color:#a8d7c2;");
           document.getElementById("cont_id").value=id;
           } else {

            document.getElementById(id).setAttribute("style", "background-color:transperant;");
            id=-5;    //constrain to handle b2a
           document.getElementById("cont_id").value=id;
            x=true;

          
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