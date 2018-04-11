
<?php require_once('head.php');
$page="about";
?>
<body>
	<div class="body">
		<?php require_once('header.php');?>
		<div role="main" class="main">
			<!--Page Content Goes Here-->
			<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="home">Home</a></li>
								<li class="active">About</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>About</h1>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row">
					<div class="col-md-3">
						<aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options='{"minWidth": 991, "containerSelector": ".container", "padding": {"top": 110}}'>

							<h4>Get a Quote</h4>
							<p>Speak with one of the best experts about the products and service information who answers any questions you may have, provide options to meet your needs and receive a top-notch level of service</p>

							<a class="btn btn-lg btn-primary mb-lg" href="request_a_quote">Request Now!</a>

						</aside>
					</div>
					<div class="col-md-9">

						<h2 id="who-we-are" class="offset">Who We Are</h2>
						<div class="sticky-container">
							<div class="row">
								<div class="col-md-8">
									<p>We are a software and Data Services company that thrives on new ideas and creative perspectives. Since 2010, it’s been our mission to help our employees, customers and partners exceed their potential. We believe 21st Century Software Solutions can accomplish anything when they have the freedom to innovate, be creative and embrace the future. That, and an intense dedication to our core values, is what our award-winning software is built on.</p>

									<p>
										When we started building software products and data services, doing what’s best for our employees and customers was second nature. As we’ve grown to a successful and strong company, we are thankful that we have the opportunity make an even bigger impact on our customers. It’s our privilege to forge meaningful, long-term relationship with the customers, partners and non-profit organizations that shape our vision and values. These relationships make us who we are – a united, engaged workforce that is dedicated to being a positive presence around the globe.
									</p>


								</div>
								<div class="col-md-4">
									<div class="center" data-plugin-sticky data-plugin-options='{"minWidth": 991, "containerSelector": ".sticky-container", "padding": {"top": 110}}'>
										<img class="pull-right img-responsive" width="300" height="211" src="img/who-we-are.jpg" alt="">
										<strong>Who We Are</strong>
									</div>
								</div>
							</div>
						</div>
						<h2 id="who-we-help" class="offset">Who We Help</h2>
						<div class="sticky-container">
							<div class="row">
								<div class="col-md-4">
									<div class="center" data-plugin-sticky data-plugin-options='{"minWidth": 991, "containerSelector": ".sticky-container", "padding": {"top": 110}}'>
										<img class="pull-left img-responsive" width="300" height="211" src="img/who-we-help.jpg" alt="">
										<strong>Who We Help</strong>
									</div>
								</div>
								<div class="col-md-8">
									<p>A potential concentration on providing an excellent customer experience helps us appeal and hold customers of all sizes, across a wide range of markets and industries. Private ownership allow us to offer our customers stability and the promise that we will continue to offer them support long after the close of a sale. </p>
									<p> We love building great software, tools and services for our customers. We enjoy receiving feedback from customers for means to amend our products and services, make them easier to use, more powerful and better at satisfying their software development, testing and project management needs.
									</p><p>
										21st Century Software Solutions is here for the long journey, which is why we have stay clear of venture capital over the years. Too many software companies are looking to generate something quickly, sell it and not look back. We have been in the industry since 2010 and look forward to help our customers a number of years from now.
									</p><p>
									This approach affects everything we do. We make sure that we’re constantly updating our product, redesigning its architecture, changing the front-end, back-end to make sure it’s constantly modern and there is minimal effort to do that. Hence, as a user you don’t have to worry that 21st Century Software Solutions products and services will become obsolete or out dated. </p>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>



			<hr class="tall">




			<h3 class="text-center offset" id="clients">Clientele <a href="Our-Clients" class="btn btn-sm btn-primary" style="margin-left: 40px"> Complete Client List </a></h3>

			<div class="row">
				<div class="owl-carousel owl-theme" data-plugin-options='{"items": 9, "autoplay": true, "autoplayTimeout": 3000}'>
					<?php
					$dirname = "img/clients/";
					$images = glob($dirname."*.*");

					foreach($images as $image) {
						?>
						<div>
							<img class="img-responsive" src="<?php echo $image?>" alt="">
						</div>

						<?php } ?>
					</div>


				</div>
				<div class="row text-center">

				</div>
				<hr>

				<section>
					<div class="fluid-container">

						<div class="row mt-xlg">
							<div class="col-md-10 col-md-offset-1">
								<h3 class="text-left offset" id="news">News</h3>

								<div class="owl-carousel owl-theme show-nav-title top-border" data-plugin-options='{"responsive": {"0": {"items": 1}, "479": {"items": 1}, "768": {"items": 2}, "979": {"items": 3}, "1199": {"items": 3}}, "items": 3, "margin": 10, "loop": false, "nav": true, "dots": false}'>
									<?php
									$ch = curl_init();  
									curl_setopt($ch,CURLOPT_URL,'http://www.21cssindia.com/webservices/news?api_key=160e64f13691a2f59d34492dc238f98e');
									curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
									$response=curl_exec($ch);
									curl_close($ch);
									$result = json_decode($response);
									foreach ($result as $row) {
										if ($row->news_status=='active') {
											    		# code...

											    	# code...?>
											    	<div>
											    		<div class="recent-posts">
											    			<article class="post">
											    				<div class="date">
											    					<span class="day"><?php 
											    					$date=explode("-", $row->news_date);

											    					echo $date[2]."/".$date[1]?></span>
											    					<span class="month"><?php echo $date[0]?></span>
											    				</div>
											    				<h4><a href="news?topic=<?php echo $row->news_id?>"><?php echo $row->news_heading?></a></h4>
											    				<p><?php echo substr($row->news_content,0,55);?> <a href="news?topic=<?php echo $row->news_id?>" class="read-more">..read more <i class="fa fa-angle-right"></i></a></p>
											    			</article>
											    		</div>


											    	</div>
											    	<?php
											    }
											  }
											  ?>											
											</div>
										</div>
									</div>
								</div>
							</section>

							<section>
								<div class="fluid-container">
									<div class="row">
										<div class="col-md-10 col-md-offset-1">
											<h3 class="text-left offset" id="ourclients">Our Partners</h3>
											<hr>
											<div class="col-md-11 col-md-offset-1">
												<ul id="featured-companies" class="row" style="list-style:none;">

													<center><li class="col-sm-11 col-md-2">
														<img src="img/clients/parents/microsoft.png" alt="">
													</li></center>
													<center><li class="col-sm-11 col-md-2">
														<img src="img/clients/parents/dgr.jpg" alt="">
													</li></center>
													<center><li class="col-sm-11 col-md-2">
														<img src="img/clients/parents/nasscom.png" alt="">
													</li></center>
													<center><li class="col-sm-11 col-md-2">
														<img src="img/clients/parents/CII.PNG" alt="">
													</li></center>
													<center><li class="col-sm-11 col-md-2">
														<img src="img/clients/parents/iTAAP_LOGO.png" alt="">
													</li></center>

												</ul>
											</div>
										</div>
									</div>
								</section>
							</div>



							<?php 
							require_once('footer.php');?>
						</div>
						<?php require_once('foot-scripts.php');?>
					</body>
					</html>