<?php
$a='';
$b='';
$c='';
$d='';
$path = $_SERVER["SCRIPT_NAME"];
$file = basename($path);
switch($file)
{
  case "index.php":
  $a='class="active"';
  break;
  case "products.php":
  $b='class="active"';
  break;
  case "contact.php":
  $c='class="active"';
  break;
  case "about.php":
  $d='class="active"';
  break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>OBSERV</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- @todo: fill with your company info or remove -->
<meta name="description" content="">
<meta name="author" content="Themelize.html">

<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet">

<!-- Plugins -->
<link href="plugins/animate/animate.css" rel="stylesheet">
<link href="plugins/flexslider/flexslider.css" rel="stylesheet">
<link href="plugins/clingify/clingify.css" rel="stylesheet">

<!-- Theme style -->
<link href="css/theme-style.css" rel="stylesheet">

<!--Your custom colour override-->
<link href="#" id="colour-scheme" rel="stylesheet">

<!-- Your custom override -->
<link href="css/custom-style.css" rel="stylesheet">

<!-- HTML5 shiv & respond.js for IE6-8 support of HTML5 elements & media queries -->
<!--[if lt IE 9]>
      <script src="plugins/html5shiv/dist/html5shiv.js"></script>
      <script src="plugins/respond/respond.min.js"></script>
    <![endif]-->

<!-- Le fav and touch icons - @todo: fill with your icons or remove -->
<link rel="shortcut icon" href="img/icons/favicon.html">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.html">
<link rel="apple-touch-icon-precomposed" href="img/icons/default.html">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css'>

<!--Retina.js plugin - @see: http://retinajs.com/-->
<script src="plugins/retina/js/retina-1.1.0.min.js"></script>
</head>

<body class="page page-index">
<a href="#content" class="sr-only">Skip to content</a>
<div id="navigation" class="wrapper">
  <div class="navbar-static-top"> 
        
    <!--Header & Branding region-->
    <div class="header" style="padding-top: 0px;">
      <div class="header-inner container">
        <div class="row">
          <div class="col-md-8"> 
            <!--branding/logo--> 
            <a class="navbar-brand" href="index.php" title="Home">
            <h1><img class="div-img" src="img/features/OBSERV.png"/></h1>
            </a>
            <div class="slogan"> </div>
          </div>
          
          <!--header rightside-->
          <div class="col-md-4"> 
            <!--social media icons-->
            <div class="social-media"> 
              <!--@todo: replace with company social media details--> 
              <a href="#"><i class="icon-youtube"></i></a> <a href="#"><i class="icon-facebook"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" data-toggle="clingify">
      <div class="navbar"> 
        
        <!--
      mobile collapse menu button
      - data-toggle="toggle" = default BS menu
      - data-toggle="jpanel-menu" = jPanel Menu
      --> 
        <a class="navbar-btn" data-toggle="jpanel-menu" data-target=".navbar-collapse"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </a> 
        
        <!--user menu-->
<!--         <div class="btn-group user-menu pull-right"> <a href="#signup-modal" class="btn btn-primary signup" data-toggle="modal">Sign Up</a> <a href="#login-modal" class="btn btn-primary dropdown-toggle login" data-toggle="modal">Login</a> </div> -->
        
        <!--everything within this div is collapsed on mobile-->
        <div class="navbar-collapse collapse"> 
          
          <!--main navigation-->
          <ul class="nav" id="main-menu">
            <li><a class="menu-item" href="index.php"><i class="icon-home"></i>HOME</a></li>
            <li class="dropdown"><a href="products.php" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">Products +</a> 
              <!-- Dropdown Menu - Mega Menu -->
              <ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="features-drop">
                <li class="mega-menu-wrapper" role="menuitem"> <!-- <span class="menu-title">Mega Menu with links & text items</span> -->
                  <ul class="row list-unstyled" role="menu">
                    <li class="products-list" role="menuitem"> 
                      <a href="products.php" class="img-link"><img src="img/features/HT-55PIXIM.png" alt="Feature 1" /></a> 
                      <a href="products.php" tabindex="-1" class="menu-item">Camera</a>
                      <spam>Camera IP</spam><br>
                      <spam>Camera Analogica</spam><br>
                      <spam>Camera HD</spam><br>
                      <spam>Camera Hidden</spam>
                    </li>
                    <li class="products-list" role="menuitem"> 
                      <a href="features.htm" class="img-link"><img src="img/features/HT-IP01C.png" alt="Feature 2" /></a> 
                      <a href="features.htm" tabindex="-1" class="menu-item">DVR</a> 
                      <spam>DVR 4 Chanels</spam><br>
                      <spam>DVR 8 Chanels</spam><br>
                      <spam>DVR 16 Chanels</spam><br>
                      <spam>DVR 24 Chanels</spam><br>
                      <spam>DVR 32 Chanels</spam>
                    </li>
                    <li class="products-list" role="menuitem"> 
                      <a href="features.htm" class="img-link"><img src="img/features/HT-IP02SN.png" alt="Feature 2" /></a> 
                      <a href="features.htm" tabindex="-1" class="menu-item">HVR</a> 
                      <spam>HVR 4 Chanels</spam><br>
                      <spam>HVR 8 Chanels</spam><br>
                      <spam>HVR 16 Chanels</spam>
                    </li>
                    <li class="products-list" role="menuitem"> 
                      <a href="features.htm" class="img-link"><img src="img/features/HT-KB1010.png" alt="Feature 1" /></a> 
                      <a href="features.htm" tabindex="-1" class="menu-item">NVR</a> 
                      <spam>NVR 4 Chanels</spam><br>
                      <spam>DVR 8 Chanels</spam><br>
                      <spam>DVR 16 Chanels</spam><br>
                    </li>
                    <li class="products-list" role="menuitem"> 
                      <a href="features.htm" class="img-link"><img src="img/features/HT-KB1010.png" alt="Feature 1" /></a> 
                      <a href="features.htm" tabindex="-1" class="menu-item">Accessories</a> 
                      <spam>Joystick PTZ</spam><br>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown"> <a href="about.htm" class="dropdown-toggle" id="about-drop" data-toggle="dropdown">About +</a> 
              <!-- Dropdown Menu -->
              <ul class="dropdown-menu" role="menu" aria-labelledby="about-drop">
                <li role="menuitem"><a href="about.php" tabindex="-1" class="menu-item">About Us</a></li>
                <li role="menuitem"><a href="our.php" tabindex="-1" class="menu-item">Our Team</a></li>
              </ul>
            </li>
            <li><a class="menu-item" href="contact.php">CONTACT</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse --> 
      </div>
    </div>
  </div>
</div>

