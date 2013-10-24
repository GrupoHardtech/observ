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
  $b='active';
  break;
  case "about":
  $c='active';
  break;
  case "our":
  $c='active';
  break;
  case "contact":
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

<!-- Bootstrap CSS -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">

<!-- Plugins -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/js/animate/animate.css" rel="stylesheet">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/js/flexslider/flexslider.css" rel="stylesheet">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/js/clingify/clingify.css" rel="stylesheet">

<!-- Theme style -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/theme-style.css" rel="stylesheet">

<!-- HTML5 shiv & respond.js for IE6-8 support of HTML5 elements & media queries -->
<!--[if lt IE 9]>
      <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv/dist/html5shiv.js"></script>
      <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond/respond.min.js"></script>
    <![endif]-->

<!--Retina.js plugin - @see: http://retinajs.com/-->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/retina/js/retina-1.1.0.min.js"></script>
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
            <div class="slogan">
              <span>Quality on image and high resolution.</span>
            </div>
          </div>
          
          <!--header rightside
          <div class="col-md-4"> -->
            <!--social media icons
            <div class="social-media"> -->
              <!--@todo: replace with company social media details
              <a href="#"><i class="icon-youtube"></i></a> <a href="#"><i class="icon-facebook"></i></a> </div>
          </div> -->
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
            <li class="dropdown <?php echo $b; ?>"><a href="" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">Products +</a> 
              <!-- Dropdown Menu - Mega Menu -->
              <ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="features-drop">
                <li class="mega-menu-wrapper" role="menuitem"> <!-- <span class="menu-title">Mega Menu with links & text items</span> -->
                  <ul class="row list-unstyled" role="menu">
                    <li class="products-list" role="menuitem">
                      <?php echo CHtml::link('<img src="img/features/HT-55PIXIM.png" alt="Feature 1" />',array('site/products','id'=>'1'),array('class'=>'img-link')); ?>
                      <?php echo CHtml::link('Camera',array('site/products','id'=>'1'),array('class'=>'menu-item','tabindex'=>'-1')); ?>
                      <spam>IP Camera</spam><br>
                      <spam>Analogic Camera</spam><br>
                      <spam>HD Camera</spam><br>
                      <spam>Hidden Camera</spam>
                    </li>
                    <li class="products-list" role="menuitem">
                      <?php echo CHtml::link('<img src="img/features/DVR.png" alt="Feature 2" />',array('site/products','id'=>'2'),array('class'=>'img-link')); ?>
                      <?php echo CHtml::link('DVR',array('site/products','id'=>'2'),array('class'=>'menu-item','tabindex'=>'-1')); ?>
                      <spam>DVR 4-Channel</spam><br>
                      <spam>DVR 8-Channel</spam><br>
                      <spam>DVR 16-Channel</spam><br>
                      <spam>DVR 24-Channel</spam><br>
                      <spam>DVR 32-Channel</spam>
                    </li>
                    <li class="products-list" role="menuitem">
                      <?php echo CHtml::link('<img src="img/features/HVR.png" alt="Feature 2" />',array('site/products','id'=>'3'),array('class'=>'img-link')); ?>
                      <?php echo CHtml::link('HVR',array('site/products','id'=>'3'),array('class'=>'menu-item','tabindex'=>'-1')); ?>
                      <spam>HVR 4-Channel</spam><br>
                      <spam>HVR 8-Channel</spam><br>
                      <spam>HVR 16-Channel</spam>
                    </li>
                    <li class="products-list" role="menuitem">
                      <?php echo CHtml::link('<img src="img/features/NVR.png" alt="Feature 1" />',array('site/products','id'=>'4'),array('class'=>'img-link')); ?>
                      <?php echo CHtml::link('NVR',array('site/products','id'=>'4'),array('class'=>'menu-item','tabindex'=>'-1')); ?>
                      <spam>NVR 4-Channel</spam><br>
                      <spam>DVR 8-Channel</spam><br>
                      <spam>DVR 16-Channel</spam><br>
                    </li>
                    <li class="products-list" role="menuitem">
                      <?php echo CHtml::link('<img src="img/features/HT-KB1010.png" alt="Feature 1" />',array('site/products','id'=>'5'),array('class'=>'img-link')); ?>
                      <?php echo CHtml::link('Accessories',array('site/products','id'=>'5'),array('class'=>'menu-item','tabindex'=>'-1')); ?>
                      <spam>Joystick PTZ</spam><br>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown <?php echo $c; ?>"> <a href="" class="dropdown-toggle menu-item" id="about-drop" data-toggle="dropdown">About +</a> 
              <!-- Dropdown Menu -->
              <ul class="dropdown-menu" role="menu" aria-labelledby="about-drop">
                <li role="menuitem"><?php echo CHtml::link('About Us',array('site/about'),array('tabindex'=>'-1')); ?></li>
                <li role="menuitem"><?php echo CHtml::link('Our Team',array('site/our'),array('tabindex'=>'-1')); ?></li>
              </ul>
            </li>
            <li <?php echo $d; ?>><?php echo CHtml::link('CONTACT',array('site/contact'),array('class'=>'menu-item')); ?></li>
          </ul>
        </div>
        <!--/.navbar-collapse --> 
      </div>
    </div>
  </div>
</div>
  <?php if ($this->action->id=='index') {?>
  <div id="highlighted">
    <div class="inner"> 
      <!--Showshow-->
      <section class="flexslider-wrapper container">
        <div class="flexslider" data-slidernav="auto" data-transition="slide">
          <div class="slides"> 

            <!--Slide #2 straight image 1170px wide x 350px high-->
            
            <div class="slide">
              <div class="slide-content container">
                <div class="row pull-center"> <img src="img/slides/banner2.png" alt="Slide 2" data-animate-in="fadeInUp" data-animate-delay="de-02" /> </div>
              </div>
            </div>

            <!--Slide #1 with caption-->

            <div class="slide">
              <div class="slide-content container">
                <div class="row pull-center"> <img src="img/slides/banner3.png" alt="Slide 2" data-animate-in="fadeInUp" data-animate-delay="de-02" /> </div>
              </div>
            </div>

            <!-- <div class="slide">
              <div class="slide-content">
                <div class="row">
                  <div class="col-md-7"><img src="img/slides/slide1.png" alt="Slide 1" data-animate-in="bounceInLeft" data-animate-delay="de-08" /></div>
                  <div class="col-md-5 caption">
                    <h2 data-animate-in="bounceInRight">AppStrap Bootstrap Theme</h2>
                    <h4 data-animate-in="bounceInRight" data-animate-delay="de-02">By <a href="http://themelize.me/">Themelize.me</a></h4>
                    <p data-animate-in="bounceInRight" data-animate-delay="de-04">Perfect for your App, Web service or hosting company!</p>
                    <a href="#" class="btn btn-lg btn-primary" data-animate-in="bounceInRight" data-animate-delay="de-06">Buy Now</a> </div>
                </div>
              </div>
            </div>    -->     
            
            <!--Slide #3 & so on below--> 
          </div>
        </div>
      </section>
    </div>
  </div>
  <?php
  } ?>

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
            <li><?php echo CHtml::link('Products',array('site/products','id'=>'1'),array()); ?></li>
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
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-migrate-1.2.1.min.js"></script><!--Legacy jQuery support for quicksand plugin--> 

<!-- Bootstrap JS --> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/tab.js"></script>

<!--JS plugins--> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/flexslider/jquery.flexslider-min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/clingify/jquery.clingify.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jPanelMenu/jquery.jpanelmenu.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jRespond/js/jRespond.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/quicksand/jquery.quicksand.js"></script>

<!--Custom scripts mainly used to trigger libraries --> 
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/script.js"></script>
</body>

</html>