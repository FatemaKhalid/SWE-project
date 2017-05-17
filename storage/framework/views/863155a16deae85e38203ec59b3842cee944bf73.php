<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="http://getbootstrap.com.vn/examples/equal-height-columns/equal-height-columns.css" /> -->
        <link href="<?php echo asset('css/layout.css'); ?>" rel="stylesheet" type="text/css" media="all">
</head>
<body>


    <?php echo $__env->make('articles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="wrapper">
  <section id="latest" class="container clear"> 
    <!-- ################################################################################################ -->
  
    <ul class="nospace group" id="articles">
      
<li>
        <figure class="txtoverlay"><a href="#"><img src="<?php echo asset('/assets/images/art1.jpg'); ?>" alt=""></a>
          <figcaption class="txtcaption">
            <h6 class="heading">Vehicula</h6>
            <p>Urna convallis vitae pellentesque odio faucibus sed porta molestie est.</p>
            <footer><a href="#">View Details &raquo;</a></footer>
          </figcaption>
        </figure>
      </li>
<li>
        <figure class="txtoverlay"><a href="#"><img src="<?php echo asset('/assets/images/art1.jpg'); ?>" alt=""></a>
          <figcaption class="txtcaption">
            <h6 class="heading">Vehicula</h6>
            <p>Urna convallis vitae pellentesque odio faucibus sed porta molestie est.</p>
            <footer><a href="#">View Details &raquo;</a></footer>
          </figcaption>
        </figure>
      </li>


    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="<?php echo asset('js/jquery.min.js'); ?>"></script>
<script src="<?php echo asset('js/jquery.backtotop.js'); ?>"></script>
<script src="<?php echo asset('js/jquery.mobilemenu.js'); ?>"></script>

</body>
</html>