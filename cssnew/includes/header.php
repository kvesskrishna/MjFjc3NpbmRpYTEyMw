<?php 
ob_start();
$url=basename($_SERVER['REQUEST_URI']);

//echo $url;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>21st century </title>

   
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="assets/custom/css/flexslider.css" type="text/css" media="screen">    	
    <link rel="stylesheet" href="assets/custom/css/parallax-slider.css" type="text/css">
    <link rel="stylesheet" href="assets/font-awesome-4.0.3/css/font-awesome.min.css" type="text/css">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
	<link href="assets/custom/css/animate.css" rel="stylesheet">
    <link href="assets/custom/css/business-plate.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/custom/ico/favicon.ico">
     <link rel="icon" href="assets/custom/img/favicon.png" type="image/png" sizes="16x16">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
	<div class="top">
    <div class="container">
        <div class="row-fluid">
            <ul class="phone-mail">
                <li><i class="fa fa-phone"></i><span>+91 891-695-9666</span></li>
                <li><i class="fa fa-envelope"></i><span>Contact@21cssindia.com</span></li>
            </ul>
            <ul class="loginbar">
              
                <li class="devider">&nbsp;</li>
                <li><a href="admin/adminlogin.php"   class="login-btn">Login</a></li>
            </ul>
        </div>
    </div>
	</div>
	
    <!-- topHeaderSection -->	
    <div class="topHeaderSection">		
    <div class="header">			
		<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="assets/custom/img/logo.png" alt="21st century software solutions"  /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
           <!-- <li class="active"><a href="index.php">Home</a></li>-->
            
            <li><a href="index.php" <?php  if($url=='index.php') {?> class="active" <?php } ?>>Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Recruitment</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
           <!-- <li><a href="aboutus.php">About us</a></li>
           
            <li><a href="contactus.php">Contact</a></li>-->
            <li><a href="aboutus.php" <?php  if($url=='aboutus.php') {?> class="active" <?php } ?>>About Us</a></li>
            <li><a href="contactus.php" <?php  if($url=='contactus.php') {?> class="active" <?php } ?>>Contact Us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
	</div>
	</div>

<script>
 wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
</script>
   
    

	</body>
</html>