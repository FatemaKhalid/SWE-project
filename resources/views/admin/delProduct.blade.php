<div class="modal fade" tabindex="-1" role="dialog" id = "delModal" style="left: 50%; bottom: initial; padding-left:0px;">
  <div class="modal-dialog" role="document" style="width: 100%; margin:  0px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" align = "right">تأكيد الحذف</h4>
      </div>
      <div class="modal-body">
        <p align = "right">...هل تريد حذف المنتج؟ سيتم حذفه نهائيا من قاعدة البيانات</p>
          <form role="form" method="POST" action="{{ Route('delProduct')}}" enctype="multipart/form-data">
               {{ csrf_field() }}
      <input type="hidden" name="p_id" value="{{ $product->id }}">
              
        <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
        <button type="submit" class="myButton">حذف</button>
          </form>
      </div>
      
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- -->	