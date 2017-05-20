<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true" style="left: 50%; bottom: initial; padding-left:0px;">
    <div class="modal-dialog" style="width: 100%; margin:  0px;">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal" float="left">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only" ></span>
                </button>
                <h4 class="modal-title" id="updateModal" align=right>
                   قم بالتعديل ثم اضغط حفظ التعديلات للحفظ
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form" method="POST" action="{{ Route('updateProduct')}}">
                 {{ csrf_field() }}
      <input type="hidden" name="p_id" value="{{ $product->id }}">
                    
        <div class="form-group" align=right>
	
      <label for="prodcut-name">اسم المنتج</label>
                     
      <input type="text" class="form-control" name="name" value = "{{$product->name}}" required= "true">
    </div>
	

    <div class="form-group" align=right>
	
      <label for="product-price">سعر المنتج</label>
        <div class="input-group"> 
           <span class="input-group-addon">L.E</span>
            <input type="number" class="form-control currency" min="0" step="0.01" name= "price" id="price" placeholder="1000.00" required= "true" value = "{{$product->price}}">
     
        </div>
    </div>
                    <div class="form-group" align= right>
                <label for="input">وصف للمنتج</label>
                <textarea class="from-control" name="description" id="description"  rows="10" >{{$product->description}}</textarea>
             </div>
         
                    
    
        
	    <div class="form-group" align=right>
      <div class="radio">
    <label class="active"><input type="radio" name="opt-sold" checked = "" value = "0">متوفر</label>
  </div>
   <div class="radio">
  <label ><input type="radio" name="opt-sold" value="1">غير متوفر</label>
  </div>
      
    </div>
	
          <button type="submit" class="myButton" >حفظ التعديلات</button>
        
        
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                
                
            </div>
        </div>
    </div>
</div>

