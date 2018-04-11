<html xmlns="http://www.w3.org/1999/xhtml" ng-app="trainingApp">
 <head>
   <title>Admin dashboard</title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
   <link href="<?php echo base_url('assets/lib/bootstrap-3.3.6/css/bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/lib/angular-1.4.8/angular-material.min.css');?>" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />

 </head>
 <body>
	<md-container layout="column">
		
	 <?php $this->load->view('header');?>	
		
		
		<div class="col-sm-12">
			<h3 class="col-sm-9">Welcome User: <?php echo $username; ?></h3>
			<div class="col-sm-3"><a href="<?php echo site_url();?>/"><i class="fa fa-user"></i>My Account</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url();?>/home/logout"><i class="fa fa-sign-out"></i>Logout</a></div>
		</div>
		<div class="col-sm-12">
			<md-tabs md-selected="data.selectedIndex" md-dynamic-height md-border-bottom md-no-ink md-no-pagination>
			  <md-tab ui-sref="course">
				<md-tab-label><a ui-sref="course"><i class="fa fa-graduation-cap"></i>Courses</a></md-tab-label>
				
			  </md-tab>
			 <md-tab ui-sref="trainer">
				<md-tab-label><a ui-sref="trainer"><i class="fa fa-user-plus"></i>Trainers</a></md-tab-label>
				
			  </md-tab>
			   <md-tab ui-sref="students">
				<md-tab-label><a ui-sref="students"><i class="fa fa-users"></i>Students</a></md-tab-label>
				
			  </md-tab>
			   <md-tab ui-sref="report">
				<md-tab-label><a ui-sref="report"><i class="fa fa-bar-chart"></i>Reports</a></md-tab-label>
				
			  </md-tab>
			   <md-tab ui-sref="payslip">
				<md-tab-label><a ui-sref="payslip"><i class="fa fa-money"></i>PaySlip</a></md-tab-label>
				
			  </md-tab>
			   <md-tab ui-sref="employee">
				<md-tab-label><a ui-sref="employee"><i class="fa fa-male"></i>Employee</a></md-tab-label>
				
			  </md-tab>
			  
			</md-tabs>
			<!---Tabs demo --->
			
			<div ui-view>
				<img src="<?php echo base_url('assets/images/ajax-loader.gif');?>" style="margin-left: 45%;margin-top: 20%;"/>
			</div>
			
		</div>
		
	</md-container>
   
   <script src="<?php echo base_url('assets/lib/angular-1.4.8/angular.min.js');?>" type="text/javascript" ></script>
   <script src="<?php echo base_url('assets/lib/angular-1.4.8/angular-animate.min.js');?>" type="text/javascript" ></script>
   <script src="<?php echo base_url('assets/lib/angular-1.4.8/angular-aria.min.js');?>" type="text/javascript" ></script>
   <script src="<?php echo base_url('assets/lib/angular-1.4.8/angular-messages.min.js');?>" type="text/javascript" ></script>
   <script src="<?php echo base_url('assets/lib/angular-1.4.8/angular-material.min.js');?>" type="text/javascript" ></script>
     <script src="<?php echo base_url('assets/lib/angular-1.4.8/angular-ui.js');?>" type="text/javascript" ></script>
	<script src="<?php echo base_url('assets/js/app.js');?>" type="text/javascript" ></script>
	<script src="<?php echo base_url('assets/js/courseController.js');?>" type="text/javascript" ></script>
	<script src="<?php echo base_url('assets/js/employeController.js');?>" type="text/javascript" ></script>
	<script src="<?php echo base_url('assets/js/payslipController.js');?>" type="text/javascript" ></script>
	<script src="<?php echo base_url('assets/js/trainerController.js');?>" type="text/javascript" ></script>
	<script src="<?php echo base_url('assets/js/studentController.js');?>" type="text/javascript" ></script>
	<script src="<?php echo base_url('assets/js/poupServices.js');?>" type="text/javascript" ></script>
	<script src="<?php echo base_url('assets/js/dataServices.js');?>" type="text/javascript" ></script>

  </body>
</html>