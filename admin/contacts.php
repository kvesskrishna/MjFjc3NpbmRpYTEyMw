<?php include('templates/header.php');
$page= $_GET['type'];
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<?php include('templates/sidenav.php');?>

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#">Home</a>
					</li>
					<li class="active">Contacts > (<?php echo $_GET['type']?>)</li>
				</ul><!-- /.breadcrumb -->
			</div>

			<div class="page-content">
				<div class="page-header">
					<h1>
						Contacts > (<?php echo $_GET['type']?>)
						<small>
							<i class="ace-icon fa fa-angle-double-right"></i>
							overview &amp; stats
						</small>                                
						<?php 
						if(isset($_SESSION['message']))
							echo "<div style='color:red'>".$_SESSION['message']."</div>";
						unset($_SESSION['message']);
						?>
					</h1>


				</div><!-- /.page-header -->

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<div class="row">
							<div class="col-md-12">
								<table id="dtable">
									<thead>
										<tr>
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Message</th>
											<th>Date</th>								
										</tr>
									</thead>
									<tbody>
										<?php
										require '../webservices/dbconfig.php';
										$sql="SELECT * FROM 21css_webcontacts WHERE type='{$_GET['type']}'";
										$res=$mysqli->query($sql);

										while ($row=$res->fetch_assoc()) { 
								# code...
											?>
											<tr>
												<td><?php echo $row['name'];?></td>
												<td><?php echo $row['email'];?></td>
												<td><?php echo $row['countrycode'].' - '.$row['phone'];?></td>
												<td><?php echo $row['message'];?></td>
												<td><?php echo $row['created'];?></td>
											</tr>
											<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
	</div><!-- /.main-content -->
</div><!-- /.main-container -->
<!-- basic scripts -->
<?php include('templates/basicscripts.php');?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#dtable').DataTable({
			"order": [[ 2, "desc"]],
		});
	} );
	
</script>
<script type="text/javascript" src="assets/js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="assets/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinymce.init({ selector:'.editdesc',
		menubar: false,
		height: 300,
		forced_root_block : "",

		plugins: [
		'advlist autolink lists link image charmap print preview anchor',
		'searchreplace visualblocks code fullscreen',
		'insertdatetime media table contextmenu paste code'
		],
		branding: false


	});
</script>
<script type="text/javascript">
	tinymce.init({ selector:'#addesc',
		menubar: false,
		height: 300,
		forced_root_block : "",
		images_upload_url: 'newsImgAcceptor.php',
		images_upload_base_path: 'http://www.21cssindia.com',
		images_upload_credentials: true,
		plugins: [
		'advlist autolink lists link image charmap print preview anchor',
		'searchreplace visualblocks code fullscreen',
		'insertdatetime media table contextmenu paste code'
		],
		branding: false


	});
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script>
	$("#newsdate1").datepicker({showOn: 'focus',changeMonth: true,
		changeYear: true,dateFormat: 'yy-mm-dd'  
	});
	$("#newsdate2").datepicker({showOn: 'focus',changeMonth: true,
		changeYear: true,dateFormat: 'yy-mm-dd'  
	});

</script>
<!-- page specific plugin scripts -->
<?php include('templates/JSpsDashboard.php');?>
<!-- inline scripts related to this page -->
<?php include('templates/JSisDashboard.php');?>			<?php include('templates/footer.php');?>

</body>
</html>