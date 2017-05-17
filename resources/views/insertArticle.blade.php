<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>


     <form method="POST" action="{{ Route('save.article')}}" enctype="multipart/form-data">
         {{ csrf_field() }}

         <input type="file" name="image" placeholder="اختر الصورة">
          <input type="text" name="article_name" placeholder="اكتب اسم المقالة">
         <input type="text" name="article_body" placeholder="اكتب المقالة">

         <select name="countries">
  <optgroup label="اختر الدولة">

            @foreach($countries as $key => $country)
              
            <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach

  
  </optgroup>
  </select>

<select name="type">
  <optgroup label="اختر نوع المقالة">

            <option value="0">ترفيهيه</option>
              <option value="1">اجراءات</option>
                <option value="2">خبرات</option>
     
  </optgroup>
  </select>

         <button type="submit">upload</button>
     </form>



    </body>

</html>
