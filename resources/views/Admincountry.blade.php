
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="POST" action="{{ Route('showTodelete')}}" enctype="multipart/form-data">
         {{ csrf_field() }}

         <select name="countries">
  <optgroup label="اختر الدولة">

            @foreach($countries as $key => $country)
              
            <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach

  
  </optgroup>
  </select>

<select name="type">
  <optgroup label="اختر نوع المقالة">

            <option value="ترفيهيه">ترفيهيه</option>
              <option value="اجراءات">اجراءات</option>
                <option value="خبرات">خبرات</option>
     
  </optgroup>
  </select>

         <button type="submit">Submit</button>
     </form>
</body>
</html>