
                <script>
window.onload = function(){
    

var products = {!! json_encode($products->toArray()) !!};
    
    
    
    if(products.length>0)
    {
      for(var i=0;i<products.length;i++)
      {
          
          var ul = document.getElementById("gallery");
  var li = document.createElement("li");
          li.className="span3 gallery-item";
         
          li.setAttribute('data-type',"illustration");
       
      
          
        var span3 = document.createElement("span");
          span3.className= "project-details product_name";
          var span3forText = document.createElement("span");
          //span3forText.className="pull-right";
          //span3forText.className = "product_name";
          span3forText.textContent= products[i].name + " " + products[i].id+" "/*+ products[i].soldout*/;

          var span4 = document.createElement("span");
          span4.className = "project-details";
          span4.textContent="السعر: "+ products[i].price + " ج.م ";
          
          var img =  document.createElement("img");


        var s1="../storage/";
   
       var s2=products[i].pic;
       
       var url=s1.concat(s2);
        img.setAttribute('src', url);



          
        var aOfimage =  document.createElement("a"); 
          aOfimage.id = products[i].id;
              aOfimage.appendChild(img);
          
           if(products[i].soldout == 1)
              {
                 var imgOfSoldout =  document.createElement("img");
                  imgOfSoldout.className = "product-soldout";
                imgOfSoldout.setAttribute('src',"assets/images/template_products/gallery/sold-out-img.png");
                  
                aOfimage.appendChild(imgOfSoldout);

                  
              }
          

          aOfimage.addEventListener('click',function(event) {
      
       
        window.open("{{url('/ProductSingle')}}" + "/" + this.id ,"_parent");
              
                 
            });
         
      
          
          
          // span4.className= "project-details";
          
        span3.appendChild(span3forText);  
    //span3.appendChild(span4);
          
    li.appendChild(aOfimage);
          
    li.appendChild(span3);
    li.appendChild(span4);      
     ul.appendChild(li);

      }
        
    }
    else
        {
               document.getElementById("body-products").innerHTML ="لا يوجد منتجات حاليا";
   
            
        }
    
    var contacts = {!! json_encode($contacts->toArray()) !!};

         
                for(var i=0;i<contacts.length;i++)
      {
          var panelBody = document.getElementById("contacts-panel");
          var divPanelBody = document.createElement("div")
          divPanelBody.className = "panel-body";
          var spanOfContacts = document.createElement("span");
          spanOfContacts.className = "glyphicon glyphicon-earphone";
          spanOfContacts.textContent = " " + contacts[i].phone;
          divPanelBody.appendChild(spanOfContacts);
          panelBody.appendChild(divPanelBody);
          
      }
    }
    
    
    </script>