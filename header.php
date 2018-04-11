
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="home">
										<img alt="21 CSS India" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/logo.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-search hidden-xs" style="display: none;">
										<form id="searchForm" action="#" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="hidden-xs">
												<a href="#""><i class="fa fa-phone"></i></a>
											</li>
											<li class="hidden-xs">
												<span class="ws-nowrap">US +1 201-905-1656</span>
											</li>
											<li>
												<span class="ws-nowrap">IN +91 741-695-9668</span>
											</li>
										</ul>
									</nav>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li <?php if($page=="home") echo 'class="active"';?>>
														<a href="home">
															Home
														</a>
														
													</li>
													<li class="dropdown <?php if($page=="about") echo 'active';?>">
														<a class="dropdown-toggle" href="about">
															About Us
														</a>
														<ul class="dropdown-menu">
															<li><a href="about#who-we-are">Who We Are</a></li>
															<li><a href="about#who-we-help">Who We Help</a></li>
															<li><a href="about#clients">Clients</a></li>
															<li><a href="about#news">News</a></li>
															<li><a href="about#ourclients">Our Partners</a></li>
														</ul>
													</li>
													<li class="dropdown dropdown-mega <?php if($page=="services") echo 'active';?>">
														<a class="dropdown-toggle" href="#">
															Products &amp; Services
														</a>
				<ul class="dropdown-menu">
					<li>
						<div class="dropdown-mega-content">
							<div class="row">
								<div class="col-md-3">
								  <span class="dropdown-mega-sub-title">Data Services</span>
										<ul class="dropdown-mega-sub-nav">
											<li><a href="#"></a></li>
											<?php
											$service_category=urlencode('Data Services');

												$ch = curl_init();  
											    curl_setopt($ch,CURLOPT_URL,'http://www.21cssindia.com/webservices/category_services?api_key=160e64f13691a2f59d34492dc238f98e&service_category='.$service_category);
											    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
											    $response=curl_exec($ch);
											    curl_close($ch);
											    $result = json_decode($response);
											    foreach ($result as $row) {
											    	# code...?>
											    	<li><a href="service?name=<?php echo strtolower(str_replace(" ", "-", $row->service_name))?>"><?php echo $row->service_name?></a></li>
											    	<?php
											    }
											?>
										</ul>
								</div>
								<div class="col-md-3">
								  <span class="dropdown-mega-sub-title">Web Development</span>
										<ul class="dropdown-mega-sub-nav">
											<li><a href="#"></a></li>
											
											<?php
											$service_category=urlencode('Web Development');
												$ch = curl_init();  
											    curl_setopt($ch,CURLOPT_URL,'http://www.21cssindia.com/webservices/category_services?api_key=160e64f13691a2f59d34492dc238f98e&service_category='.$service_category);
											    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
											    $response=curl_exec($ch);
											    curl_close($ch);
											    $result = json_decode($response);
											    foreach ($result as $row) {
											    	# code...?>
											    	<li><a href="service?name=<?php echo strtolower(str_replace(" ", "-", $row->service_name))?>"><?php echo $row->service_name?></a></li>
											    	<?php
											    }
											?>
										</ul>
								</div>
								<div class="col-md-3">
								  <span class="dropdown-mega-sub-title">App Development</span>
										<ul class="dropdown-mega-sub-nav">
											<li><a href="#"></a></li>
											<?php
											$service_category=urlencode('App Development');
												$ch = curl_init();  
											    curl_setopt($ch,CURLOPT_URL,'http://www.21cssindia.com/webservices/category_services?api_key=160e64f13691a2f59d34492dc238f98e&service_category='.$service_category);
											    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
											    $response=curl_exec($ch);
											    curl_close($ch);
											    $result = json_decode($response);
											    foreach ($result as $row) {
											    	# code...?>
											    	<li><a href="service?name=<?php echo strtolower(str_replace(" ", "-", $row->service_name))?>"><?php echo $row->service_name?></a></li>
											    	<?php
											    }
											?>
										</ul>
								</div>
								<div class="col-md-3">
								  <span class="dropdown-mega-sub-title">RPO</span>
										<ul class="dropdown-mega-sub-nav">
											<li><a href="RPO">Recruitment Process Outsourcing</a></li>
											
										</ul>
								</div>
																		
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li <?php if($page=="blockchain") echo 'class="active"';?>>
														<a  href="blockchain">
															Blockchain
														</a>
														
													</li>
												
													<li <?php if($page=="careers") echo 'class="active"';?>>
														<a  href="careers">
															Careers
														</a>
														
													</li>
													<li <?php if($page=="gallery") echo 'class="active"';?>>
														<a href="gallery">
															Gallery
														</a>
													</li>
													<li <?php if($page=="contact") echo 'class="active"';?>>
														<a href="contact">
															Contact Us
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>