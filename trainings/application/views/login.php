<html xmlns="http://www.w3.org/1999/xhtml" ng-app="trainingApp">
 <head>
   <title>Training System</title>
   <link href="<?php echo base_url('assets/lib/bootstrap-3.3.6/css/bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/lib/angular-1.4.8/angular-material.min.css');?>" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />
 </head>
 <body>
	<md-container layout="column">
		<?php $this->load->view('header');?>
		
		<?php if(validation_errors()){ ?>
		<div class="alert alert-danger">
					<?php echo validation_errors(); ?>
		</div>
		<?php } ?>
		<div class="col-sm-offset-4 col-sm-4">
		<br><br><br>
			<md-whiteframe class="md-whiteframe-3dp" flex-sm="10" flex-gt-sm="33" flex-gt-md="33" layout layout-align="center center">
				
				<?php echo form_open('verifylogin'); ?>
				<h2 style="text-align:center">User Login</h2>
				<md-input-container class="md-icon-float md-block">
					<label>User Name</label>
					<md-icon><i class="fa fa-user"></i></md-icon>
					<input ng-model="user.name" type="text" name="username">
				</md-input-container>
				<md-input-container class="md-icon-float md-block">
					<label>Password</label>
					<md-icon><i class="fa fa-key"></i></md-icon>
					<input ng-model="user.pwd" type="password" name="password">
				</md-input-container>
				
				<md-button type="submit" class="md-raised md-primary">Login</md-button>
				<md-button type="reset" class="md-raised">Cancel</md-button>
				</form>
			
			</md-whiteframe>
		</div>
		
	</md-container>
   
   <script src="<?php echo base_url('assets/lib/angular-1.4.8/angular.min.js');?>" type="text/javascript" ></script>
   <script src="<?php echo base_url('assets/lib/angular-1.4.8/angular-animate.min.js');?>" type="text/javascript" ></script>
   <script src="<?php echo base_url('assets/lib/angular-1.4.8/angular-aria.min.js');?>" type="text/javascript" ></script>
   <script src="<?php echo base_url('assets/lib/angular-1.4.8/angular-messages.min.js');?>" type="text/javascript" ></script>
   <script src="<?php echo base_url('assets/lib/angular-1.4.8/angular-material.min.js');?>" type="text/javascript" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.18/angular-ui-router.min.js"></script>
  <script src="<?php echo base_url('assets/js/app.js');?>" type="text/javascript" ></script>
 </body>
</html>