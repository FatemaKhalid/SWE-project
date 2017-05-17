<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>


     <form method="POST" action="{{ Route('save.image')}}" enctype="multipart/form-data">
         {{ csrf_field() }}

         <input type="file" name="image">
          <input type="text" name="image_name">
         <input type="text" name="image_description">
         <input type="text" name="image_price">

         <button type="submit">save image</button>
     </form>



    </body>

</html>
