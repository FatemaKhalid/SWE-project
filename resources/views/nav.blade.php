<!doctype html>
 <link rel="stylesheet" type="text/css" href="{!! asset('css/nav.css') !!}">
  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
      <!-- <link rel="stylesheet" type="text/css" href="{!! asset('css/articles.css') !!}"> -->

  <script src="{!! asset('js/article.js') !!}"></script>

<!-------------Nav Bar----------------- -->

<nav class="navbar navbar-static-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
 

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('/articles')}}"><img src="{!! asset('/assets/images/home.png')!!}" class="im"> <span class="sr-only">(current)</span></a></li>
      
      </ul>

    

      <form class="navbar-form navbar-left">
        <div class="form-group" id="cont">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" onclick="srch('cont')"><img src="{!! asset('/assets/images/search.png')!!}" class="srch" ></button>
      </form>

        <img src="{!! asset('/assets/images/logo.png')!!}" alt="Brand" class="navbar-brand im logo" id="lo">


   <ul class="nav navbar-nav navbar-right">

        <li class="dropdown" onclick="myFunction('myDropdown')" >
          <a href="#" class="dropdown-toggle  " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <img src="{!! asset('/assets/images/menu.png')!!}" class="im dropbtn"> <span class="caret"></span></a>
         <ul class="dropdown-content" id="myDropdown">
            <li ><a href="#">ترفيهية</a></li>
            <li ><a href="#">خبرات</a></li>
            <li ><a href="#">اجراءات</a></li>
          </ul>
        </li>
         
      </ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container -->
  
</nav>


  <!-- ------------------------------ -->
