
<?php require_once('head.php');
$page="about";
?>
<?php
if (isset($_GET['topic'])) {
	# code...

	$ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,'http://www.21cssindia.com/webservices/news?api_key=160e64f13691a2f59d34492dc238f98e&news_id='.$_GET['topic']);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $response=curl_exec($ch);
    curl_close($ch);
    $result = json_decode($response);
    foreach ($result as $row) {
   	# code...
    	$news_status = $row->news_status;
    	if ($news_status=='inactive') {
    	    		# code...
    	header('Location: about#news');
    	}
    	$news_heading=$row->news_heading;
    	$news_content=$row->news_content;
    	$news_date=$row->news_date;
    	$news_id=$row->news_id;

	}
}
else
header('Location: about#news');
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
									<li class="active">News / <?php echo $news_heading;?></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1><?php echo $news_heading;?></h1>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row">
						<div class="col-md-offset-2 col-md-8">
							<?php echo $news_content;?>
							
							<?php

if ($news_id == "14") {
    echo '<a href="apitagallery" class="btn btn-lg btn-primary"> Full Event <i class="fa fa-chevron-right"></i> </a>';

}
else if ($news_id == "15") {
    echo '<a href="CII-Summit" class="btn btn-lg btn-primary"> Full Event <i class="fa fa-chevron-right"></i> </a>';
    
}
else if ($news_id == "17") {
echo '<a href="dgr-training" class="btn btn-lg btn-primary"> Full Event <i class="fa fa-chevron-right"></i> </a>';
}
else {
echo '<a href="#" class="btn btn-lg btn-primary"> Full Event <i class="fa fa-chevron-right"></i> </a>';
}

?>
						</div>
					</div>
				</div>
			</div>
			<?php 
			//require_once('request-quote-strip.php');
			require_once('footer.php');?>
		</div>
		<?php require_once('foot-scripts.php');?>
	</body>
</html>