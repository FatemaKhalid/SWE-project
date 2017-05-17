window.onload = function(){
    
     var products = {!! json_encode($products->toArray()) !!};
    
    
    
    
    if(products.length>0)
    {
      for(var i=0;i<products.length;i++)
      {
          String product_name=products[i].name;
          String product_price = products[i].price;
          
          var ul = document.getElementById("gallery");
  var li = document.createElement("li");
          li.className="span3 gallery-item";
          li.setAttribute('data-id' , "id-"+i);
          li.setAttribute('data-type',"illustration");
       
//      var img =  document.createElement("img");
//          img.setAttribute('src',imgsrc[i]);
//        var aOfimage =  document.createElement("a"); 
//          aOfimage.setAttribute('href',"{{URL::route('ProductSingle')}}","parent");
          
        var span3 = document.createElement("span");
          span3.className= "project-details";
          var span3forText = document.createElement("span");
          span3forText.className="pull-right";
          span3forText.innerHTML= product_name;

          var span4 = document.createElement("span");
          span4.innerHTML="Price: "+ product_price;
          // span4.className= "project-details";
          
        span3.appendChild(span3forText);  
    span3.appendChild(span4);
          
//    aOfimage.appendChild(img);
//    li.appendChild(aOfimage);
          
    li.appendChild(span3);
     ul.appendChild(li);

      }
        
    }
    else
        {
               document.getElementById("panel-body").innerHTML ="لا يوجد منتجات حاليا";
   
            
        }
    
    
    
         
                for(var i=0;i<2;i++)
      {
          var panelBody = document.getElementById("contacts-panel");
          var divPanelBody = document.createElement("div")
          divPanelBody.className = "panel-body";
          var spanOfContacts = document.createElement("span");
          spanOfContacts.className = "glyphicon glyphicon-earphone";
          spanOfContacts.innerHTML = " 02 01120819478";
          divPanelBody.appendChild(spanOfContacts);
          panelBody.appendChild(divPanelBody);
          
      }
    }
    $('.gallery-post-grid').on('mouseover','span3', function(){
        
    var span1 = document.createElement("span");
          span1.className= "gallery-hover-4col hidden-phone hidden-tablet";
           span1.setAttribute('style',"opacity: 0; display: inline;");
        
  var span2 =  document.createElement("span");
          span2.className="gallery-icons";
              
      var a1Ofspan2 = document.createElement("a");     
   a1Ofspan2.className="item-zoom-link lightbox";
          a1Ofspan2.setAttribute('href',"img/gallery/gallery-img-1-full.jpg");
          a1Ofspan2.setAttribute('title',"Custom Illustration");
          a1Ofspan2.setAttribute('data-rel',"prettyPhoto");
          a1Ofspan2.setAttribute('rel',"prettyPhoto");
          
          var a2Ofspan2 = document.createElement("a");     
   a2Ofspan2.className="item-details-link";
          a2Ofspan2.setAttribute('href',"gallery-single.htm");
        
         span2.appendChild(a1Ofspan2);
   span2.appendChild(a2Ofspan2);
   span1.appendChild(span2);
    
    li.appendChild(span1);
    ul.appendChild(li);
     
        
        
});      