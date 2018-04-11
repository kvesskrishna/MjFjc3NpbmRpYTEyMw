<?php
error_reporting(0);
if($_POST['submit'] == 'register'){
	
	$fullname = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	
	
	$api_url = 'http://www.21cssindia.com/services/api.php/registrations';
	
	$data = array(
        'reg_fullname' => $fullname,
        'reg_contact' => $mobile,
        'reg_email' => $email,
        'reg_password' => $password
			);   
	
	$data_string = json_encode($data);
	
		$ch = curl_init($api_url);  
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                            
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                          
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                       
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));       
		$result = curl_exec($ch);
		curl_close($ch);
		/*curl handle end*/
		echo $result; 
			
	}


if($_POST['submit'] == 'LOGIN'){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$api_url = 'http://www.21cssindia.com/services/api.php/registrations';
	
	$data = array(
       
        'reg_email' => $email,
        'reg_password' => $password
			);   
	$data_string = json_encode($data);
	
		$ch = curl_init($api_url);  
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                            
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                          
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
		$result = curl_exec($ch);
		curl_close($ch);
		if($result == " "){
			echo "login secssesful";
			
			} else{
				echo "login failed";
				}
	}

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

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="assets/font-awesome-4.0.3/css/font-awesome.min.css" type="text/css">
     <!--<link href="https://code.jquery.com/jquery-3.2.1.min.js" >-->
     
    <link href="assets/custom/css/style.css" rel="stylesheet">
   

    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- CSS Implementing Plugins -->
    
    <link rel="stylesheet" href="assets/custom/css/flexslider.css" type="text/css" media="screen">    	
    <link rel="stylesheet" href="assets/custom/css/parallax-slider.css" type="text/css">
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
            <li> <a class="navbar-brand" ><img src="assets/custom/img/foot.png" alt="21st century software solutions"  /></a> </li>
                <!--<li><i class="fa fa-phone"></i><span>+91 738-662-2889</span></li>
                <li><i class="fa fa-envelope"></i><span>developer.21stcentury@gmail.com</span></li>-->
            </ul>
            <ul class="loginbar">
            
            <!-- search -->
        <div class="search">
          <form action="#" method="post">
            <input type="text" class="field" value="keywords here ..." title="keywords here ...">
            <input type="submit" class="search-btn" value="">
            <div class="cl">&nbsp;</div>
          </form>
          
          <!--<div class="span12">
          <form id="custom-search-form" class="form-search form-horizontal pull-right">
                <div class="input-append span12">
                    <input type="text" class="search-query" placeholder="Search">
                    <button type="submit" class="btn"><i class="icon-search"></i></button>
                </div>
            </form>
          	</div>-->
          
          
          
        </div>
        <!-- end of search -->
      
            
            
               <!-- <li><a href="#" class="login-btn">Help</a></li>-->
                <!--<li class="devider">&nbsp;</li>
                <li><a href="#" class="login-btn">Login</a></li>-->
            </ul>
        </div>
    </div>
	</div>

<!-------------------------------------------------------------------------------------------------->


<!-- menu bar -->	
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
         
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="#">Recruitment</a></li>
                <li><a href="#">Something </a></li>
              </ul>
            </li>
            <li><a href="aboutus.html">About us</a></li>
            <!--<li><a href="#about">Blog</a></li>-->
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
	</div>
	</div>



<!----------menu end------------->


 <!-- highlightSection -->
    <div class="highlightSection">
		<div class="container">
			<div class="row">
			<div class="col-md-10">
			 <h4>Join with us Request quote</h4>
			 <!--<em> vero eos et accusamus et iusto  </em>-->
			
			</div>
			<div class="col-md-2 align-right"> 
			<!--<a class="btn btn btn-brand" href="#">read more</a>-->
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Login / Register</button>
    
   
				<!--</p>-->
			</div>
			</div>
		</div>
	</div>




<!-- bannerSection -->
    <div class="bannerSection">
		<div class="slider-inner">
			<div id="da-slider" class="da-slider">
				<div class="da-slide" >
					<h2 style="font-family: cursive; text-shadow: 3px 1px 2px #082b34; "><i>We </i> <br> <i>Enabled with </i> <br> <i>Complete Solutions</i></h2>
					<p><i>Experience enhanced </i> <br> <i>reliability and productivity</i> <br> <i> In Mordern technology </i></p>
					<div class="da-img"><img src="assets/custom/img/Responsive-Website-Design-Devices.png" alt="" /></div>
				</div>
				
				<div class="da-slide">
					<h2 style="font-family: cursive; text-shadow: 3px 1px 2px #082b34; "><i>We  </i> <br> <i> Provide Responsive</i> <br> <i>Design & Development</i></h2>
					<p><i>Professional look</i> <br> <i>Compitable in different device</i> <br> <i>In Mordern technology</i></p>
					<div class="da-img"><img src="assets/custom/img/bootstrap-mobile-template.png" alt="" /></div>
				</div>
				
				
				
				<div class="da-slide">
					<h2 style="font-family: cursive; text-shadow: 3px 1px 2px #082b34; "><i>We enjoy </i> <br> <i> Developing technology</i><br> <i>Solutions that push the limits</i></h2>
					<p><i>Awesome business </i> <br> <i> success history</i></p>
					<div class="da-img">
							<!--<iframe src="http://player.vimeo.com/video/41029575" width="100%" height="320" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen class="col-md-offset-4 col-md-6"></iframe>-->
				    <img src="assets/custom/img/bootstrap-mobile-template3.png" alt="" />

					</div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>		
				</nav>
			</div><!--/da-slider-->
		</div><!--/slider-->
		<!--=== End Slider ===-->
        
        </div>
    <!-- BANNER SECTION END -->


















<!-- Large modal -->
<!--<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Login / Register</button>-->
    
    
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration  <a href="#"></a></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10" >
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                            
  <!--       LOGIN PAGE  -->                 
                            
                 <form role="form" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
              <input type="email" class="form-control" id="email1" name="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                    
             <input type="submit"  class="btn btn-primary btn-sm" name="submit" value="LOGIN">
                                       <!-- <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>-->
                                        <a href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                  </form>
                            </div>
                            
       <!--   REGISTRATION PAGE  -->                
                            
                            <div class="tab-pane" id="Registration">
                                <form role="form" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                </select>
                                            </div>
                                            <div class="col-md-9">
          <input type="text" class="form-control" name="name" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
       <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
    	 <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
         <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <!--<button type="button" class="btn btn-primary btn-sm" name="submit">
                                            Save & Continue</button>-->
          <input type="submit" class="btn btn-primary btn-sm" name="submit" value="register">
                                        <button type="button" class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                       <!-- <div id="OR" class="hidden-xs">
                            OR</div>-->
                    </div>
                    
                    
                    
                    <!--<div class="col-md-4">
                        <div class="row text-center sign-with">
                        
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                        Google</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    -->
                    
                </div>
            </div>
        </div>
    </div>
</div>


<!--body section start-->

<div>
<p>
<h1 align="center">body part</h1>

</p>


</div>






<!--body section end-->


<!-- footerTopSection -->
    <div class="footerTopSection">
		<div class="container">
			<div class="row">
			  <div class="col-md-2">
				<h4>Technology center </h4>
                
                
                <ul class="list">
                    <li><a href="#">Hadoop</a></li>
                    <li>Big Data</li>
                    <li>Cloud computing</li>
                    <li>Data Science</li>
                	<li>Information</li>
                	<li>Dev ops</li>
                    <li>Data Science</li>
                </ul>
                
				<!--<p>
				Best service provicer for<br>
				<strong>web and application </strong> design and development.
				</p>
				
				<h3>Monthly news letter</h3>
				<p>If you intended to get monthly newsletters and offers from us?</p>-->
				<!--<div>
					<form class="form-inline" role="form">
					  <div class="form-group">
						<label class="sr-only" for="exampleInputEmail2">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
					  </div>
					  <button type="submit" class="btn btn-brand">Subscribe</button>
					</form>
				</div>-->
				
			  </div>
			  <div class="col-md-2">
              
              <h4>Services </h4>
                
                
                <ul class="list">
                    <li>Agile Infrastructure</li>
                    <li>Data Management</li>
                    <li>Product Engineering</li>
                    <li>IT Security Services</li>
                	<li>Information</li>
                	<li>Web Technologies</li>
                  
                </ul>
				
			  </div>
			  <div class="col-md-2">
              
              <h4>Industry Solutions </h4>
                
                
              <ul class="list">
                    <li>CRMS</li>
                    <li>CMS</li>
                    <li>Ecommerce</li>
                    <li>Business Management</li>
                	<li>Banking</li>
                	<li>Manufacturing</li>
                  <li>Retail</li>
                  <li>Travel & Hospitality</li>
                </ul>
              
              
              
              
				<!--<h3>Useful Links</h3>
				<p>
					<span>This may be the very useful and quick link for proper information</span><br><br>
					<a href="#">Our Services</a><br>
					<a href="#">About us</a><br>
					<a href="#">Our Network</a><br>
					<a href="#">Our Products</a><br>
				</p>
				<h3>Friends</h3>
				<p>
					<a href="#">Yahoo.com</a><br>
					<a href="#">Canon</a>
				</p>-->
				
			  </div>
			  <div class="col-md-2">
              
              <h4>Recruitment </h4>
                
                
                <ul class="list">
                    <li>Process</li>
                    <li>Clients</li>
                    <li>Customers</li>
                    <li>Join</li>
                	
                  
                </ul>
              
				<!--<h3>Contact us</h3>
				<p>
					<strong>21st Century Software Solutions.</strong><br>
					50-102-8/3, North Extension Layout, Seethammadhara,<br>
					Visakhapatnam – 530013, A.P<br>
					P : +91 891-695-9666 / +91 891-272-8543.<br>
					E : contact@21stcentury.com<br>
					W :	www.21stcentury.com<br>
				</p>-->
				
					
			  </div>
              
              <div class="col-md-2">
				<h4>News & Events </h4>
                
                
                <ul class="list">
                    <li>Press Releases</li>
                    <li>In the News</li>
                    <li>Events</li>
                   
                	
                  
                </ul>
				
					
			  </div>
              
              <div class="col-md-2">
				<h4>Resources</h4>
                
                
                <ul class="list">
                    <li>Audio Video </li>
                    <li> White Papers</li>
                    <li>Brochures</li>
                   <li>Articles</li>
                	<li>News letter</li>
                  
                </ul>
				
			  </div>
              
              
              
			</div>
		</div>
	</div>






<!-- footerBottomSection -->	
	<div class="footerBottomSection">
		<div class="container">
			&copy; 2017, Allright reserved by 21st century software solutions . <a href="#">Terms and Condition</a> | <a href="#">Privacy Policy</a> 
			<div class="pull-right"> <a href="index.html">
			<img src="assets/custom/img/foot.png" alt="21st century"  /> 
			</a></div>
		</div>
	</div>
	
<!-- JS Global Compulsory -->			
<script type="text/javascript" src="assets/custom/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="assets/custom/js/modernizr.custom.js"></script>		
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>	
	
	<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/custom/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/custom/js/modernizr.js"></script>
<script type="text/javascript" src="assets/custom/js/jquery.cslider.js"></script> 
<script type="text/javascript" src="assets/custom/js/back-to-top.js"></script>
<script type="text/javascript" src="assets/custom/js/jquery.sticky.js"></script>

<!-- JS Page Level -->           
<script type="text/javascript" src="assets/custom/js/app.js"></script>
<script type="text/javascript" src="assets/custom/js/index.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
</script>


</body>
</html>