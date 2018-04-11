<?php require_once('head.php');
$page="contact";?>
	<body>
		<div class="body">
			<?php require_once('header.php');?>
			<div role="main" class="main">
				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="home">Home</a></li>
									<li class="active">Contact</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Contact</h1>
 							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
											<!--Page Content Goes Here-->
						<div id="map" style="height: 400px; width: 100%;">

						</div>
					</div>
				</div>
				<div style="margin-top: 50px;"></div>
				<div class="row">
						<div class="col-md-6">

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
							</div>

							<h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>
							               <?php 
                if (isset($_SESSION['constat'])) {
                  $stat=$_SESSION['constat'];
                  if ($stat==1) {
                    echo "<h3>Thank You for your interest in us, Our representative will get back to you shortly</h3>";
                  }
                  if ($stat==0) {
                    echo "<h3>Sorry we are unable to register your request, please try later</h3>";
                  }
                  unset($_SESSION['constat']);
                }
                ?>

							<form id="contactForm" action="submitContact" method="POST">
								<input type="hidden" name="type" value="contact">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Your name *</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-6">
											<label>Your email address *</label>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
								</div>
								
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Your Phone *</label>
                      <div class="input-group col-md-12">
                        
                        <span class="input-group-btn">
                          <select class="btn" name="countrycode">
                            <option value="+1">US (+1)</option>
                            <option value="+91">India (+91)</option>
                          </select>
                        </span>
                        <input class="form-control" type="text" name="phone">
                      </div>
                    </div>
                  </div>
                </div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Message *</label>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">

							<h4 class="heading-primary mt-lg">Get in <strong>Touch</strong></h4>
							<p>Please write to us, we are always ready and happy to assist you and let you know what we offer to help your business grow.</p>

							<hr>

							<h4 class="heading-primary">Our <strong>Locations</strong></h4>
							<ul class="list list-icons list-icons-style-3 mt-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Corporate Office - India: </strong> 50-102-8/3, North Extension Layout,Seethammadhara, Visakhapatnam - 530013, AP, India.</li>
								<li><i class="fa fa-phone"></i> <strong>Phone:</strong> +91 891-272-8543, +91 891-695-9666</li>
								<li><i class="fa fa-phone"></i> <strong>Phone:</strong> Hyderabad: +91 040-65890128, Bangalore: +91 90309 90003</li>
								<li><i class="fa fa-map-marker"></i> <strong>US Office: </strong>21st Century Software Solutions Pvt Ltd, 2300 Valley View Ln #215, Irving, TX 75062, USA. </li>
								<li><i class="fa fa-phone"></i> <strong>Phone:</strong> +1 209-905-1656</li>
								<li><i class="fa fa-map-marker"></i> <strong>Malaysia Office: </strong>21ST CENTURY SOFTWARE SOLUTIONS SDN. BHD, Level 36, Menara Citibank, 165, Jalan Ampang 50450 Kuala Lumpur. </li>
								<li><i class="fa fa-phone"></i> <strong>Phone:</strong> +603 2169 6158</li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:contact@21cssindia.com">contact@21cssindia.com</a></li>
							</ul>

							<hr>

							<h4 class="heading-primary">Business <strong>Hours</strong></h4>
							<ul class="list list-icons list-dark mt-xlg">
								<li><i class="fa fa-clock-o"></i> Monday - Friday 9am to 5pm</li>
								<li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
								<li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
							</ul>

						</div>

					</div>
			</div>
						<div style="margin-top: 150px;"></div>

			<?php require_once('footer.php');?>
		</div>

		<?php require_once('foot-scripts.php');?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOulZLrKOZcxCbyM01pXj9tM3iN-iST_Q&callback=initMap">
    </script>
    <script type="text/javascript">
    var locations = [
      ['India', 17.744649, 83.308444, 3],
      ['USA', 32.840115, -97.020752, 2],
      ['Malaysia', 3.160183, 101.717340, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 2,
      center: new google.maps.LatLng(17.92, 13.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
	</body>
</html>