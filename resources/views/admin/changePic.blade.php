
<div class="modal fade" id="changePicModal" tabindex="-1" role="dialog" 
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
                اختر الملف ثم اضغط حفط لتغيير الصورة
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form" method="POST" action="{{ Route('changeProductPic')}}" enctype="multipart/form-data">
                 {{ csrf_field() }}
      <input type="hidden" name="p_id" value="{{ $product->id }}">
      <input type="hidden" name="name" value="{{ $product->name }}">
      <input type="hidden" name="price" value="{{ $product->price }}">
      <input type="hidden" name="soldout" value="{{ $product->soldout }}">
      <input type="hidden" name="description" value="{{ $product->description }}">

  <div class="form-group">
    <label for="product-image">صورة للمنتج </label>
    <input type="file" name= "image" id="image" required= "true" >
  </div>
	
          <button type="submit" class="myButton" >حفظ </button>
        
        
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                
                
            </div>
        </div>
    </div>
</div>

