<?php require_once('head.php');
$page="careers";
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
									<li class="active">Careers</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Careers</h1>
							</div>
						</div>
					</div>
				</section>
				<div class="container">

					<h2><strong>Careers</strong> at 21 CSS!</h2>

					<div class="row">
						<div class="col-md-12">
							<p class="lead">
With over 300 dedicated employees across ten global locations and minimal attrition rates, 21 CSS has proven to be a great place to work at. We think of ourselves as a big family, whose core values are based on respect, open communication and tolerance.
<br>
Our clients’ business outcome is the true measure of our success and pushes us to find creative solutions to the most difficult challenges. We look for qualified candidates who are eager to become a true part of our team. Whether you’re looking to learn new skills or wish to contribute your industry expertise, we’d love to hear from you. 
							</p>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="toggle toggle-primary mt-lg" data-plugin-toggle>
									<?php
						$ch = curl_init();  
					    curl_setopt($ch,CURLOPT_URL,'http://www.21cssindia.com/webservices/careers?api_key=160e64f13691a2f59d34492dc238f98e');
					    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
					    $response=curl_exec($ch);
					    curl_close($ch);
					    $result = json_decode($response);
					    //var_dump($result);
					    //echo $result[0]->service_name;
					    foreach ($result as $post) {
					    	# code...
					    
					    ?>
								<section class="toggle">
									<label><?php echo $post->career_title?></label>
									<div class="toggle-content">
										<p><strong>Location:</strong> <?php echo $post->career_location?> - <strong>Department:</strong><?php echo $post->career_department?></p>
										<p><?php echo $post->career_description?></p>
										<p><a class="btn btn-primary mb-xl" href="#">Apply Now</a></p>
									</div>
								</section>
								<?php } ?>
							
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