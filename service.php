<?php require_once('head.php');
$page="services";
if (isset($_GET['name'])) {
	# code...
	$ch = curl_init();
	$service=ucwords(str_replace("-", " ", $_GET['name']));
	curl_setopt($ch,CURLOPT_URL,'http://www.21cssindia.com/webservices/service_details?api_key=160e64f13691a2f59d34492dc238f98e&service_name='.urlencode($service));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	$result = json_decode($response,true);
	foreach ($result as $row) {
	# code...
		$service_categorys = $row['service_category'];
		$service_name = $row['service_name'];
		$about = $row['about'];
		$key_offerings = $row['key_offerings'];
		$implementation_services = $row['implementation_services'];
		$service_image = $row['service_image'];
	}
}
else
	header('Location:home');
?>
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
								<li><a href="#"> Products &amp; Services / <?php echo $service_categorys?></a></li>
								<li class="active"><?php echo $service_name?></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1><?php echo $service_name?></h1>
						</div>
					</div>
				</div>
			</section>
			<div class="container">
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

				<div class="row">

					<div class="col-md-10 col-md-offset-1">

						<div class="tabs tabs-bottom tabs-center tabs-simple mt-xl mb-xl">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tabsNavigationSimpleIcons1" data-toggle="tab">
										<span class="featured-boxes featured-boxes-style-6 p-none m-none">
											<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
												<span class="box-content p-none m-none">
													<i class="icon-featured icon-bulb icons"></i>
												</span>
											</span>
										</span>									
										<p class="mb-none pb-none">About</p>
									</a>
								</li>
								<li>
									<a href="#tabsNavigationSimpleIcons2" data-toggle="tab">
										<span class="featured-boxes featured-boxes-style-6 p-none m-none">
											<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
												<span class="box-content p-none m-none">
													<i class="icon-featured icon-moustache icons"></i>
												</span>
											</span>
										</span>									
										<p class="mb-none pb-none">Key Offerings</p>
									</a>
								</li>
								<li>
									<a href="#tabsNavigationSimpleIcons3" data-toggle="tab">
										<span class="featured-boxes featured-boxes-style-6 p-none m-none">
											<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
												<span class="box-content p-none m-none">
													<i class="icon-featured icon-puzzle icons"></i>
												</span>
											</span>
										</span>									
										<p class="mb-none pb-none">Implementation Services</p>
									</a>
								</li>
								<li>
									<a href="#tabsNavigationSimpleIcons4" data-toggle="tab">
										<span class="featured-boxes featured-boxes-style-6 p-none m-none">
											<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
												<span class="box-content p-none m-none">
													<i class="icon-featured icon-rocket icons"></i>
												</span>
											</span>
										</span>									
										<p class="mb-none pb-none">Get in touch</p>
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tabsNavigationSimpleIcons1">

									<p><?php echo $about?></p>

								</div>
								<div class="tab-pane" id="tabsNavigationSimpleIcons2">
									
									<p><?php echo $key_offerings?></p>
									
								</div>
								<div class="tab-pane" id="tabsNavigationSimpleIcons3">
									
									<p><?php echo $implementation_services?></p>


								</div>
								<div class="tab-pane" id="tabsNavigationSimpleIcons4">
									<div class="center">
										<p>
											<form class="form-horizontal" method="post" action="submitContact">
												<input type="hidden" name="type" value="touch">
												<div class="form-group">
													<label class="hidden control-label col-md-4">Interested Service</label>
													<div class="col-md-4">
														<input class="form-control" type="hidden" name="message" value="<?php echo $service_name?>" readonly>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Your Name</label>
													<div class="col-md-4">
														<input class="form-control" type="text" name="name" placeholder="Your Name">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Your Email</label>
													<div class="col-md-4">
														<input class="form-control" type="email" name="email" placeholder="Your Email">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Your Contact</label>
													<div class="input-group col-md-4">
														<span class="input-group-btn">
															<select class="btn" name="countrycode">
																<option value="+1">US (+1)</option>
																<option value="+91">India (+91)</option>
															</select>
														</span>
														<input class="form-control" type="text" name="phone">
													</div>
												</div>
												<div class="col-md-4 col-md-offset-4">
													<button type="submit" class="btn btn-success">Get In Touch</button>
												</div>
											</form>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div style="margin-top: 150px;"></div>
		<?php 
		require_once('footer.php');?>
	</div>
	<?php require_once('foot-scripts.php');?>

</body>
</html>