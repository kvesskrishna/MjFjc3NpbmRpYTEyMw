<?php include('templates/header.php');
$page="services";
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

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
							<li class="active">Products &amp; Services</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Products &amp; Services
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
							
							<p class="text-right"><a href="#additemModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">New Product/Service</a></p>
							
						</div><!-- /.page-header -->
						<div id="additemModal" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Add Product/Service</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="formactions.php" enctype="multipart/form-data">
								<input type="hidden" name="action" value="createservice">
            						<div class="modal-body">
            							<div class="form-group">
            								<label class="control-label col-md-4">Service Category</label>
            								<div class="col-md-4">
            									<select class="form-group" name="service_category">
            										<option value="Data Services">Data Services</option>
            										<option value="Web Development">Web Development</option>
            										<option value="App Development">App Development</option>
            										
            									</select>
            								</div>
            							</div>
  							  			<div class="form-group">
            								<label class="control-label col-md-4">Service Name</label>
            								<div class="col-md-4">
            									<input type="text" name="service_name" class="form-control" required="">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-2">About</label>
            								<div class="col-md-9">
            									<textarea name="about"></textarea>
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-2">Key Offerings</label>
            								<div class="col-md-9">
            									<textarea name="key_offerings"></textarea>
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-2">Implementation Services</label>
            								<div class="col-md-9">
            									<textarea name="implementation_services"></textarea>
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-2">Image</label>
            								<div class="col-md-9">
            									<input type="file" accept=".png,.jpg,.gif,.jpeg" name="uploadedfile">
            								</div>
            							</div>
					            	</div>
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" name="additem" class="btn btn-primary">Add Service</button>
						            </div>
            				</form>
				        </div>
				    </div>
				</div>



		<div class="row">
			<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
				<div class="row">
					<div class="col-md-12">
						<?php
						$ch = curl_init();  
					    curl_setopt($ch,CURLOPT_URL,'http://www.21cssindia.com/webservices/services?api_key=160e64f13691a2f59d34492dc238f98e');
					    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
					    $response=curl_exec($ch);
					    curl_close($ch);
					    $result = json_decode($response);
					    //var_dump($result);
					    //echo $result[0]->service_name;
					    ?>
					<table id="dtable">
						<thead>
							<tr>
								<th>Service/Product</th>
								<th>Service Category</th>
								<th>Status</th>
								<th>Created on</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							for ($i=0; $i < sizeof($result); $i++) { 
								# code...
								?>
							<tr>
								<td><?php echo $result[$i]->service_name;?></td>
								<td><?php echo $result[$i]->service_category;?></td>
								<td><?php echo $result[$i]->service_status;?></td>
								<td><?php echo $result[$i]->service_created;?></td>
								<td>
									<a  href="#edit<?php echo $result[$i]->service_id?>" data-toggle="modal"><i class="fa fa-pencil"></i></a>
								</td>
						<div id="edit<?php echo $result[$i]->service_id?>" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Edit Item</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="formactions.php">
            						<div class="modal-body">
            							<div class="form-group">
            								<label class="control-label col-md-3">Service Category</label>
            								<div class="col-md-9">
            									<select class="form-group" name="service_category">
            										<option selected="" value="<?php echo $result[$i]->service_category?>"><?php echo $result[$i]->service_category?></option>
            										<option value="Data Services">Data Services</option>
            										<option value="Web Development">Web Development</option>
            										<option value="App Development">App Development</option>
            										
            									</select>
            								</div>
            							</div>
										<div class="form-group">
            								<label class="control-label col-md-3">Service Name</label>
            								<div class="col-md-9">
            									<input type="text" name="service_name" class="form-control" required="" value="<?php echo $result[$i]->service_name?>">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-2">About</label>
            								<div class="col-md-10">
            									<textarea name="about" required=""><?php echo $result[$i]->about?></textarea>
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-2">Key Offerings</label>
            								<div class="col-md-10">
            									<textarea name="key_offerings" class="form-control" required=""><?php echo $result[$i]->key_offerings?></textarea>
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-2">Implementation Services</label>
            								<div class="col-md-10">
            									<textarea name="implementation_services" class="form-control" required=""><?php echo $result[$i]->implementation_services?></textarea>
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-2">Status</label>
            								<div class="col-md-10">
            									<select class="form-control" name="service_status">
            										<option selected="" value="<?php echo $result[$i]->service_status?>"><?php echo $result[$i]->service_status?></option>
            										<option value="active">Active</option>
            										<option value="inactive">Inactive</option>
            									</select>
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-3">Service Image</label>
            								<div class="col-md-9">
            									<input type="file" name="uploadedfile">
            								</div>
            							</div>
					            	</div>
					            	<input type="hidden" name="service_id" value="<?php echo $result[$i]->service_id?>">
					            	<input type="hidden" name="action" value="updateservice">  	
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" id="editbtn" name="edititem" class="btn btn-primary">Edit Service</button>
						            </div>
            				</form>
				        </div>
				    </div>
				</div>
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
			tinymce.init({ selector:'textarea',
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
		<!-- page specific plugin scripts -->
		<?php include('templates/JSpsDashboard.php');?>
		<!-- inline scripts related to this page -->
		<?php include('templates/JSisDashboard.php');?>			<?php include('templates/footer.php');?>

	</body>
</html>