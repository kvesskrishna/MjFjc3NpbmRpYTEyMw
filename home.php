<?php require_once('head.php');
$page="home";
?>
	<body>
		<div class="body">
<?php require_once('header.php');?>
			<div role="main" class="main">
				<?php require_once('home-slider.php');
				require_once('request-quote-strip.php');
				?>
				
				<div class="container">

					<div class="row">
						<div class="col-md-12 center">
							<h2 class="word-rotator-title mb-sm">21st Century Software Solutions is the <strong>most <span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
								<span class="word-rotate-items">
									<span>powerful</span>
									<span>effective</span>
									<span>incredible</span>
								</span>
							</span></strong> Data Services and Software Development Organization.</h2>
							<p class="lead">Trusted by numerous satisfied customers, we a huge success<br>in the of one of the world’s largest IT Service Providers.</p>
						</div>
					</div>

					<div class="row mt-xl">
						<div class="counters counters-text-dark">
							<div class="col-md-3 col-sm-6">
								<div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
									<i class="fa fa-user"></i>
									<strong data-to="100" data-append="+">0</strong>
									<label>Happy Clients</label>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
									<i class="fa fa-desktop"></i>
									<strong data-to="50" data-append="+">0</strong>
									<label>Customized Technologies</label>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900">
									<i class="fa fa-ticket"></i>
									<strong data-to="2500" data-append="+">0</strong>
									<label>Solved Requests</label>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="counter appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1200">
									<i class="fa fa-clock-o"></i>
									<strong data-to="300" data-append="+">0</strong>
									<label>Dedicated Staff</label>
								</div>
							</div>
						</div>
					</div>

				</div>
				<section class="section section-default section-with-mockup mb-none">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="feature-box feature-box-style-2 reverse mb-xl appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
									<div class="feature-box-icon">
										<i class="fa fa-bolt"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">Full Cycle Development</h4>
										<p class="mb-lg">Complete range of development services equipped with flexible engagement models</p>
									</div>
								</div>
								<div class="feature-box feature-box-style-2 reverse mt-xl appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
									<div class="feature-box-icon">
										<i class="fa fa-heart"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">Incredible Support</h4>
										<p class="mb-lg">We will be with you, considering your requirement, its development and everytying we really care about your business.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<img src="img/mockup-porto.png" class="img-responsive mockup-landing-page mb-xl appear-animation" alt="21 css india" data-appear-animation="fadeInDown" data-appear-animation-delay="300">
							</div>
							<div class="col-md-4">
								<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="300">
									<div class="feature-box-icon">
										<i class="fa fa-puzzle-piece"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">Flexible Services</h4>
										<p class="mb-lg">We are here with lots of services that allows you to derive, design and excell in your market with our support.</p>
									</div>
								</div>
								<div class="feature-box feature-box-style-2 mt-xl appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="600">
									<div class="feature-box-icon">
										<i class="fa fa-cloud-download"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">Unbeatable Prices</h4>
										<p class="mb-lg">Send us your need now and get all the information and quotes that no one in the market can offer with guaranteed satisfaction.>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="call-to-action call-to-action-primary mb-none">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="call-to-action-content align-left pb-md mb-xl ml-none">
									<h2 class="text-color-light mb-none mt-xl">21 CSS takes up  <strong>any IT needs for your business...</strong></h2>
									<p class="lead mb-xl">Here are some products and services you can choose:</p>
								</div>
								<div class="call-to-action-btn">
									<a href="request_a_quote.php" target="_blank" class="btn btn-lg btn-primary btn-primary-scale-2 mr-md">Request Quote!</a>
									<span class="mr-md text-color-light hidden-xs"><strong>Just Now</strong><span class="arrow arrow-light hlb" style="top: -88px; right: -47px;"></span></span>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section section-primary section-primary-scale-2 section-center section-no-border mt-none p-sm" id="demos">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="nav nav-pills sort-source sort-source-style-2" data-sort-id="portfolio" data-option-key="filter">
									<li data-option-value="*" class="active"><a href="#">SHOW ALL</a></li>
									<li data-option-value=".data"><a href="#">DATA SERVICES</a></li>
									<li data-option-value=".app"><a href="#">MOBILE APP DEVELOPMENT</a></li>
									<li data-option-value=".web"><a href="#">WEB DEVELOPMENT</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<ul class="portfolio-list sort-destination full-width-spaced mb-xl" data-sort-id="portfolio" id="homeOverview">
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item data">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/datamodeling.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Data Modeling</h5>
								
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item data">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/data-discovery.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Data Discovery</h5>
							
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item data">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/data-quality.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Data Quality</h5>
								
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item data">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/data-integration.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Data Integration</h5>
							
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item data">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/data-management.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Data Management</h5>
							
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item data">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/data-governance.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Data Governance</h5>
								
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item app">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/android-development.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Android App Development</h5>
								
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item app">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/iphone-development.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">iPhone/iPad App Development</h5>
							
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item app">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/windows-development.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Windows App Development</h5>
								
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item app">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/blackberry.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Blackberry App development</h5>
								
							</a>
						</div>
					</li>

					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item web">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/custom-application-development.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Custom Application Development</h5>
								
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item web">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/crm.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Customer Relationship Management</h5>
							
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item web">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/cms.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Content Management Systems</h5>
								
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item web">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/ecommerce.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Ecommerce</h5>
							
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item web">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/business-management.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Business Management</h5>
							
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item web">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/banking.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Banking</h5>
							
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item web">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/retail.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Retail</h5>
								
							</a>
						</div>
					</li>
					<li class="col-md-3 col-sm-6 col-xs-12 isotope-item web">
						<div class="portfolio-item center">
							<a href="#" class="text-decoration-none block-link pt-md">
								<span class="thumb-info thumb-info-preview thumb-info-preview-long mb-md">
									<span class="thumb-info-wrapper">
										<span class="thumb-info-image" data-original="img/previews/travel-hospitality.jpg" data-plugin-lazyload></span>
									</span>
								</span>
								<h5 class="mb-xs">Travel &amp; Hospitality</h5>
								
							</a>
						</div>
					</li>
				</ul>
			
			
			
			
				
			
				<div class="container">

					<div class="row">
						<div class="col-md-12 center">
							<h2 class="mt-xl mb-none">Our <strong>Focus &amp; Features</strong></h2>
							<p class="lead mb-xl">There are so many reasons to choose 21 CSS, here are a few:</p>
							<hr class="invisible">
						</div>
					</div>

					<div class="row mb-xl">
						<div class="col-md-3">
							<div class="feature-box feature-box-style-6">
								<div class="feature-box-icon">
									<i class="fa fa-check text-color-primary"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="pt-xs"><strong class="semi-bold">Consultancy Services</strong></h4>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature-box feature-box-style-6">
								<div class="feature-box-icon">
									<i class="fa fa-check text-color-primary"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="pt-xs"><strong class="semi-bold">Data Management</strong></h4>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature-box feature-box-style-6">
								<div class="feature-box-icon">
									<i class="fa fa-check text-color-primary"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="pt-xs"><strong class="semi-bold">Broad Analysis</strong></h4>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature-box feature-box-style-6">
								<div class="feature-box-icon">
									<i class="fa fa-check text-color-primary"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="pt-xs"><strong class="semi-bold">Flexible Schedules</strong></h4>
								</div>
							</div>
						</div>
					</div>
					<div class="row mb-xl">
						<div class="col-md-3">
							<div class="feature-box feature-box-style-6">
								<div class="feature-box-icon">
									<i class="fa fa-check text-color-primary"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="pt-xs"><strong class="semi-bold">Dedicated Teams</strong></h4>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature-box feature-box-style-6">
								<div class="feature-box-icon">
									<i class="fa fa-check text-color-primary"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="pt-xs"><strong class="semi-bold">Latest Methodologies</strong></h4>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature-box feature-box-style-6">
								<div class="feature-box-icon">
									<i class="fa fa-check text-color-primary"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="pt-xs"><strong class="semi-bold">24/7 Support</strong></h4>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature-box feature-box-style-6">
								<div class="feature-box-icon">
									<i class="fa fa-check text-color-primary"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="pt-xs"><strong class="semi-bold">SEO Optimization</strong></h4>
								</div>
							</div>
						</div>
					</div>
					<div class="row mb-xl">
						<div class="col-md-3">
							<div class="feature-box feature-box-style-6">
								<div class="feature-box-icon">
									<i class="fa fa-check text-color-primary"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="pt-xs"><strong class="semi-bold">Best Strategies</strong></h4>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="feature-box feature-box-style-6">
								<div class="feature-box-icon">
									<i class="fa fa-check text-color-primary"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="pt-xs"><strong class="semi-bold">Amazing Options</strong></h4>
								</div>
							</div>
						</div>
					
						
					</div>

					<div class="row">
						<div class="col-md-12 center">
							<hr>
							<h2><span class="alternative-font font-size-md mt-xl">and lot more..</span></h2>
						</div>
					</div>

				</div>
				<section class="parallax section section-text-light section-parallax section-center mt-xl mb-none" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax-image.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<h2><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs mr-xs"></i><i class="fa fa-star font-size-xs"></i><br><strong>What Client’s Say</strong></h2>
								<div class="owl-carousel owl-theme nav-bottom rounded-nav mb-none" data-plugin-options='{"items": 1, "loop": false}'>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Outstanding about everything</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>Customer A</strong></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Outstanding about everything</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>Customer A</strong></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Outstanding about everything</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>Customer A</strong></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="call-to-action call-to-action-default call-to-action-in-footer mt-none no-top-arrow">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="call-to-action-content align-left pb-md mb-xl ml-none">
									<h2 class="mb-xs mt-xl">Start exploring the great ways to expand your IT abilities with <strong>21st Century Software Solutions!</strong></h2>
									<p class="lead mb-xl">We are sure that 21 CSS is the best choice for your business, do not hesitate, write to us to join as one of our happy customers. Get started now.</p>
								</div>
								<div class="call-to-action-btn">
									<a href="request_a_quote.php" target="_blank" class="btn btn-lg btn-primary"><i class="fa fa-cark mr-xs"></i> Request Quote</a>
									
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
 
		<?php require_once('footer.php');?>
	</div>
<?php require_once('foot-scripts.php');?>
	</body>
</html>