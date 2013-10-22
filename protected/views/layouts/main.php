<?php
$a='';
$b='';
$c='';
$d='';
switch($this->action->id)
{
  case "index":
  $a='class="active"';
  break;
  case "products":
  $b='class="active"';
  break;
  case "contact":
  $c='class="active"';
  break;
  case "about":
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
<meta name="author" content="">

<!-- Font Awesome -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">

<!-- Plugins -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/animate/animate.css" rel="stylesheet">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/flexslider/flexslider.css" rel="stylesheet">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/clingify/clingify.css" rel="stylesheet">

<!-- Theme style -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/theme-style.css" rel="stylesheet">

<!--Your custom colour override-->
<link href="#" id="colour-scheme" rel="stylesheet">

<!-- Your custom override -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom-style.css" rel="stylesheet">

<!-- HTML5 shiv & respond.js for IE6-8 support of HTML5 elements & media queries -->
<!--[if lt IE 9]>
      <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/html5shiv/dist/html5shiv.js"></script>
      <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/respond/respond.min.js"></script>
    <![endif]-->

<!--Retina.js plugin - @see: http://retinajs.com/-->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/retina/js/retina-1.1.0.min.js"></script>
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
            <a class="navbar-brand" href="index" title="Home">
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
            <li <?php echo $a; ?>><?php echo CHtml::link('<i class="icon-home"></i> HOME',array('site/index'),array('class'=>'menu-item')); ?></li>
            <!-- <li><a class="menu-item" href="index"><i class="icon-home"></i> HOME</a></li> -->
            <li class="dropdown"><a href="" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">Products +</a> 
              <!-- Dropdown Menu - Mega Menu -->
              <ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="features-drop">
                <li class="mega-menu-wrapper" role="menuitem"> <!-- <span class="menu-title">Mega Menu with links & text items</span> -->
                  <ul class="row list-unstyled" role="menu">
                    <li class="products-list" role="menuitem">
                      <?php echo CHtml::link('<img src="img/features/HT-55PIXIM.png" alt="Feature 1" />',array('site/products'),array('class'=>'img-link')); ?>
                      <?php echo CHtml::link('Camera',array('site/products'),array('class'=>'menu-item','tabindex'=>'-1')); ?>
                      <spam>Camera IP</spam><br>
                      <spam>Camera Analogica</spam><br>
                      <spam>Camera HD</spam><br>
                      <spam>Camera Hidden</spam>
                    </li>
                    <li class="products-list" role="menuitem">
                      <?php echo CHtml::link('<img src="img/features/HT-IP01C.png" alt="Feature 2" />',array('site/products'),array('class'=>'img-link')); ?>
                      <?php echo CHtml::link('DVR',array('site/products'),array('class'=>'menu-item','tabindex'=>'-1')); ?>
                      <spam>DVR 4 Chanels</spam><br>
                      <spam>DVR 8 Chanels</spam><br>
                      <spam>DVR 16 Chanels</spam><br>
                      <spam>DVR 24 Chanels</spam><br>
                      <spam>DVR 32 Chanels</spam>
                    </li>
                    <li class="products-list" role="menuitem">
                      <?php echo CHtml::link('<img src="img/features/HT-IP02SN.png" alt="Feature 2" />',array('site/products'),array('class'=>'img-link')); ?>
                      <?php echo CHtml::link('HVR',array('site/products'),array('class'=>'menu-item','tabindex'=>'-1')); ?>
                      <spam>HVR 4 Chanels</spam><br>
                      <spam>HVR 8 Chanels</spam><br>
                      <spam>HVR 16 Chanels</spam>
                    </li>
                    <li class="products-list" role="menuitem">
                      <?php echo CHtml::link('<img src="img/features/HT-KB1010.png" alt="Feature 1" />',array('site/products'),array('class'=>'img-link')); ?>
                      <?php echo CHtml::link('NVR',array('site/products'),array('class'=>'menu-item','tabindex'=>'-1')); ?>
                      <spam>NVR 4 Chanels</spam><br>
                      <spam>DVR 8 Chanels</spam><br>
                      <spam>DVR 16 Chanels</spam><br>
                    </li>
                    <li class="products-list" role="menuitem">
                      <?php echo CHtml::link('<img src="img/features/HT-KB1010.png" alt="Feature 1" />',array('site/products'),array('class'=>'img-link')); ?>
                      <?php echo CHtml::link('Accessories',array('site/products'),array('class'=>'menu-item','tabindex'=>'-1')); ?>
                      <spam>Joystick PTZ</spam><br>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown"> <a href="" class="dropdown-toggle" id="about-drop" data-toggle="dropdown">About +</a> 
              <!-- Dropdown Menu -->
              <ul class="dropdown-menu" role="menu" aria-labelledby="about-drop">
                <li role="menuitem"><?php echo CHtml::link('About Us',array('site/about'),array('tabindex'=>'-1')); ?></li>
                <li role="menuitem"><?php echo CHtml::link('Our Team',array('site/our'),array('tabindex'=>'-1')); ?></li>
              </ul>
            </li>
            <li><?php echo CHtml::link('CONTACT',array('site/contact')); ?></li>
          </ul>
        </div>
        <!--/.navbar-collapse --> 
      </div>
    </div>
  </div>
</div>

	<?php echo $content; ?>

<!-- FOOTER -->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div id="toplink"><a href="#top" class="top-link" title="Back to top">Back To Top <i class="icon-chevron-up"></i></a></div>
      <!--@todo: replace with company copyright details-->
      <div class="subfooter">
        <div class="col-md-6">
          <p>Site by <a href="#">OBSERV</a> | Copyright 2013 &copy; All rights reserved.</p>
        </div>
        <div class="col-md-6">
          <ul class="list-inline footer-menu">
            <li><?php echo CHtml::link('Products',array('site/products'),array()); ?></li>
            <li><?php echo CHtml::link('About',array('site/about'),array()); ?></li>
            <li><?php echo CHtml::link('Contact Us',array('site/contact'),array()); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--Scripts --> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-migrate-1.2.1.min.js"></script> <!--Legacy jQuery support for quicksand plugin--> 

<!--JS plugins--> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/clingify/jquery.clingify.min.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jPanelMenu/jquery.jpanelmenu.min.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jRespond/js/jRespond.js"></script> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/quicksand/jquery.quicksand.js"></script> 

<!--Custom scripts mainly used to trigger libraries --> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/script.js"></script>
</body>

</html>