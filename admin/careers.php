<?php include('templates/header.php');
$page="careers";
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
							<li class="active">Careers</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Careers
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
							
							<p class="text-right"><a href="#additemModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">New Post</a></p>
							
						</div><!-- /.page-header -->
						<div id="additemModal" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Add Post</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="formactions.php" >
								<input type="hidden" name="action" value="createcareer">
            						<div class="modal-body">
            							
  							  			<div class="form-group">
            								<label class="control-label col-md-4">Job Title</label>
            								<div class="col-md-4">
            									<input type="text" name="career_title" class="form-control" required="">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">Job Location</label>
            								<div class="col-md-4">
            									<input type="text" name="career_location" class="form-control" required="">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">Job Experience</label>
            								<div class="col-md-4">
            									<input type="text" name="career_experience" class="form-control" required="">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">Job Department</label>
            								<div class="col-md-4">
            									<input type="text" name="career_department" class="form-control" required="">
            								</div>
            							</div>

            							<div class="form-group">
            								<label class="control-label col-md-2">Job Description</label>
            								<div class="col-md-9">
            									<textarea  id="addesc" name="career_description"></textarea>
            								</div>
            							</div>
            							
            							
            							
					            	</div>
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" name="additem" class="btn btn-primary">Add Post</button>
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
					    curl_setopt($ch,CURLOPT_URL,'http://www.21cssindia.com/webservices/careers?api_key=160e64f13691a2f59d34492dc238f98e');
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
								<th>Title</th>
								<th>Department</th>
								<th>Experience</th>
								<th>Location</th>
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
								<td><?php echo $result[$i]->career_title;?></td>
								<td><?php echo $result[$i]->career_department;?></td>
								<td><?php echo $result[$i]->career_experience;?></td>
								<td><?php echo $result[$i]->career_location;?></td>
								<td><?php echo $result[$i]->career_status;?></td>
								<td><?php echo $result[$i]->career_created;?></td>
									<td>
									<a  href="#edit<?php echo $result[$i]->career_id?>" data-toggle="modal"><i class="fa fa-pencil"></i></a>
								</td>
						<div id="edit<?php echo $result[$i]->career_id?>" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Edit Item</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="formactions.php">
            						<div class="modal-body">
            							
										<div class="form-group">
            								<label class="control-label col-md-3">Titile</label>
            								<div class="col-md-9">
            									<input type="text" name="career_title" class="form-control" required="" value="<?php echo $result[$i]->career_title?>">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-3">Location</label>
            								<div class="col-md-9">
            									<input type="text" name="career_location" class="form-control" required="" value="<?php echo $result[$i]->career_location?>">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-3">Department</label>
            								<div class="col-md-9">
            									<input type="text" name="career_department" class="form-control" required="" value="<?php echo $result[$i]->career_department?>">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-3">Experience</label>
            								<div class="col-md-9">
            									<input type="text" name="career_experience" class="form-control" required="" value="<?php echo $result[$i]->career_experience?>">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-2">Description</label>
            								<div class="col-md-10">
            									<textarea class="editdesc" name="career_description"><?php echo $result[$i]->career_description?></textarea>
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-2">Status</label>
            								<div class="col-md-10">
            									<select class="form-control" name="career_status">
            										<option selected="" value="<?php echo $result[$i]->career_status?>"><?php echo $result[$i]->career_status?></option>
            										<option value="active">Active</option>
            										<option value="inactive">Inactive</option>
            									</select>
            								</div>
            							</div
            							
					            	</div>
					            	<input type="hidden" name="career_id" value="<?php echo $result[$i]->career_id?>">
					            	<input type="hidden" name="action" value="updatecareer">  	
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" id="editbtn" name="edititem" class="btn btn-primary">Edit Post</button>
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