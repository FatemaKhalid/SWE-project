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
        <li class="active"><a href="{{url('/')}}"><img src="{!! asset('/assets/images/home.png')!!}" class="im"> <span class="sr-only">(current)</span></a></li>
      
      </ul>

    

      <form class="navbar-form navbar-left" method="POST" action="{{ Route('searchArticles')}}">
                 {{ csrf_field() }}
          <input type="hidden" name="p_id" value="{{ $count_id }}">
        <div class="form-group" id="cont">
          <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default"><img src="{!! asset('/assets/images/search.png')!!}" class="srch" ></button>
      </form>

        <img src="{!! asset('/assets/images/logo.png')!!}" alt="Brand" class="navbar-brand im logo" id="lo">


    </div><!-- /.navbar-collapse -->

  </div><!-- /.container -->
  
</nav>



  <!-- ------------------------------ -->
