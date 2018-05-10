<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tresna Riyanto</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Memorize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="css/style3.css" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/mislider.css" rel="stylesheet" type="text/css" />
<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />
<link href="css/view.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<div id="home" class="banner w3l">
    <div class="header-nav">
    <div class="container">
      <nav class="navbar navbar-default">
          <div class="navbar-header logo">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <h1>
                  <a class="navbar-brand" href="index.html">Aplikasi Sederhana Data Pegawai</a>
                </h1>
          </div>
          <div class="contact-bnr-w3-agile">
            <a class="page-scroll" href="login.php" data-toggle="modal" data-hover="LOGIN">LOGOUT</a>
          </div>
          <!-- navbar-header -->
          <div class="header-right-agileits">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="menuinputkel.php" class=" active">Input Data kelompok kerja</a></li>
                <li><a href="menutampilkel.php" class=" active">Daftar kelompok kerja</a></li>
                <li><a href="menuinput.php" class=" active">Input Data Pegawai</a></li>
                <li><a href="menutampil.php" class=" active">Daftar pegawai</a></li>
              
            </ul>
          </div>
          <div class="clearfix"> </div> 
          </div>
</nav>
              <div class="clearfix"> </div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
    <?php
	
	require_once("input.php")
	?>
    
    
            <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="footer">

<!-- //footer -->
<div class="copy">
  <div class="container">
    <p>© 2017 Memorize . All Rights Reserved | Design by <a href="http://w3layouts.com/">Tresna </a></p>
      <ul class="agileits_social_list">
        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
        <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
      </ul>
  </div>
</div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--//js -->
<!-- OnScroll-Number-Increase-JavaScript -->
  <script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--Scrolling-top -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!--//Scrolling-top -->
<!--light-box-files -->
    <script src="js/jquery.chocolat.js"></script>
<!-- PopUp-Box-JavaScript -->
    <script type="text/javascript">
      $(function() {
      $('.filtr-item a').Chocolat();
      });
    </script>
<!-- //PopUp-Box-JavaScript -->
 <!--light-box-files -->
 <!-- testimonial-plugin -->
    <script src="js/mislider.js" type="text/javascript"></script>
    <script type="text/javascript">
      jQuery(function ($) {
        var slider = $('.mis-stage').miSlider({
          //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
          stageHeight: 320,
          //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
          slidesOnStage: false,
          //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
          slidePosition: 'center',
          //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
          slideStart: 'mid',
          //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
          slideScaling: 150,
          //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
          offsetV: -5,
          //  Center slide contents vertically - Boolean. Default: false
          centerV: true,
          //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
          navButtonsOpacity: 1,
        });
      });
    </script>
<!-- //testimonial-plugin -->
<!-- flexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
      animation: "slide",
      start: function(slider){
        $('body').removeClass('loading');
      }
      });
    });
  </script>
<!-- //flexSlider -->
<!-- bottom to top arrow -->
  <script type="text/javascript">
    $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
      };
    */                
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //bottom to top arrow -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>