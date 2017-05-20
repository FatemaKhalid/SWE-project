
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
          
          var divimg =  document.createElement("div");
          divimg.className="divimg-in-products";

        var s1="../storage/";
   
       var s2=products[i].pic;
       
       var url=s1.concat(s2);
        // img.setAttribute('src', url);
var soldouturl = "assets/images/template_products/gallery/sold-out-img.png";


          
        var aOfimage =  document.createElement("a"); 
          aOfimage.id = products[i].id;
              
          
           if(products[i].soldout == 1)
              {
                 divimg.setAttribute("style","background:url("+soldouturl+") no-repeat top left ,url("+url+") no-repeat center center; background-size: cover;");
                // divimg.setAttribute("style"," background-size: cover;");

                  
              }
          else {
              divimg.setAttribute("style","background:url("+url+") no-repeat center center; background-size: cover;");
              //   divimg.setAttribute("style"," background-size: cover;");
          }
          

          aOfimage.addEventListener('click',function(event) {
      
       
        window.open("{{url('/showProductSingle')}}" + "/" + this.id ,"_parent");
              
                 
            });
         
      
          
          
          // span4.className= "project-details";
          
        span3.appendChild(span3forText);  
    //span3.appendChild(span4);
          aOfimage.appendChild(divimg);
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
    
    }
    
    
    </script>