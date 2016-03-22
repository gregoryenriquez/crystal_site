<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://maiartistry.com/test/bootstrap/icon.ico">

    <title>Mai Artistry</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../dist/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/dist/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="bootstrap/dist/css/carousel.css" rel="stylesheet">


    <!-- Shared assets -->
    <!-- <link rel="stylesheet" type="text/css" href="../_shared/css/style.css"> -->

    <!-- Example assets -->
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/js/jcarousel.basic.css">

    <script type="text/javascript" src="bootstrap/dist/js/jquery/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/dist/js/jquery.jcarousel.min.js"></script>

    <script type="text/javascript" src="bootstrap/dist/js/jcarousel.basic.js"></script>

    <!-- WEB PAGE TAB ICON -->
    <link rel="shortcut icon" href="http://maiartistry.com/test/bootstrap/icon.ico">
    <link type="text/css" href="bootstrap/dist/css/custom.css" rel="stylesheet">

    <!-- CUSTOM FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Quicksand:300' rel='stylesheet' type='text/css'>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
      <div class="container"> 
        <h1 id="header">
          <!-- <div class="center-logo"> -->
            <p>MAI ARTISTRY</p>
            <!-- <img src="bootstrap/logo.png" horizontal-align="middle"> -->
          <!-- </div> -->
        </h1>
        <h2 id="header2">
          by Crystal
        </h2>
      </div>

    <div >
      <div class="container">
        <nav class="navbar">
          <div class="container">
              <ul class="nav navbar-nav center-navbar" style="font-size: x-large;">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#weddings">Wedding samples</a></li>
                    <li><a href="#studio">Studio samples</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">More Samples</li>
                    <li><a href="transformations.php">Transformations</a></li>
                    <li><a href="#tutorial">Tutorials</a></li>
                  </ul>
                </li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="faq.php">FAQ</a></li>
              </ul>
          </div>
        </nav>

      </div>
    </div>

    <div class="wrapper">
          <div class="jcarousel-wrapper" >
              <div class="jcarousel" >
                  <ul>
                    <?php
                      $directory = "bootstrap/assets/homepage/";
                      // echo $directory;
                      foreach(glob($directory . '*') as $filename) {
                          echo '<li><img src="'.$filename.'" width="300" height="400" alt=""></li>';
                      }
                    ?>
                  </ul>
              </div>

              <p class="photo-credits">
                  Photos by <a href="http://www.mw-fotografie.de">choiboi</a>
              </p>

              <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
              <a href="#" class="jcarousel-control-next">&rsaquo;</a>
              

                  
              </p>
          </div>
      </div>    



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- FOOTER -->
      <footer>
        <!-- <p class="pull-right"><a href="#">Back to top</a></p> -->
        <p id="footer">&copy; 2015 Mai Artistry, Inc.</p>
        <div style="width: 100%; text-align: center; font-size: xx-small">
            powered by <a href="#">greggles!</a>
        </div>
      </br>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/dist/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>