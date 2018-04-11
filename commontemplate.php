<?php require_once('head.php');?>
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
									<li class="active">Page Title</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Page Title</h1>
							</div>
						</div>
					</div>
				</section>
			</div>
			<?php 
			require_once('request-quote-strip.php');
			require_once('footer.php');?>
		</div>
		<?php require_once('foot-scripts.php');?>
	</body>
</html>