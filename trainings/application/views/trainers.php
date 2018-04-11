<md-container layout="column">	
<h2 style="text-align:center">Trainer's</h2>
<form name="trainerForm">
<div class="col-sm-12 accHeader">
<div class="row">
	<h3 ng-click="accord.newTrainer=!accord.newTrainer"><i class="material-icons" ng-show="!accord.newTrainer">keyboard_arrow_right</i><i class="material-icons" ng-show="accord.newTrainer">keyboard_arrow_down</i>Add New Trainer</h3>
</div>
</div>
<div class="col-sm-12" ng-show="accord.newTrainer">
	<div class="row">
		<div class="col-sm-12">
		<div class="alert alert-success" ng-if="success">
			{{response}}
		</div>
			<md-input-container class="md-icon-float md-block col-sm-3">
					<label>Trainer Name</label>
					<input ng-model="trainer.name" type="text" name="trainerName" required />
				  <div ng-messages="trainerForm.trainerName.$error">
						  <div ng-message="required">This is required.</div>  
					</div>  
			</md-input-container>
			<md-input-container class="md-icon-float md-block col-sm-3">
					<label>Contact Number</label>
					<input ng-model="trainer.mobile" type="number" name="contNo" required />
					<div ng-messages="trainerForm.contNo.$error">
						  <div ng-message="required">This is required.</div>  
					</div>
			</md-input-container>
			<md-input-container class="md-icon-float md-block col-sm-3">
					<label>Email Id</label>
					<input ng-model="trainer.emailid" type="email" name="emaiId" required />
					<div ng-messages="trainerForm.emaiId.$error">
						  <div ng-message="required">This is required.</div>  
					</div>
			</md-input-container>	
			<md-input-container class="md-icon-float md-block col-sm-3">
					<label>Training Course</label>
					<md-select ng-model="trainer.course" ng-disabled="editMode">
					  <md-option ng-repeat="course in courseList" value="{{course.CourseId}}" >
						{{course.CourseName}}
					  </md-option>
					</md-select>
					 <div ng-messages="trainerForm.course.$error">
						  <div ng-message="required">This is required.</div>  
					</div>
			</md-input-container>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<md-input-container class="md-icon-float md-block col-sm-3">
					<label>Training Experience(Yrs)</label>
					<input ng-model="trainer.exp" type="number" name="trainExp" required>
					<div ng-messages="trainerForm.trainExp.$error">
						  <div ng-message="required">This is required.</div>  
					</div>
			</md-input-container>
			<md-input-container class="md-icon-float md-block col-sm-3">
					<label>Other Skills(if any)</label>
					<input ng-model="trainer.other" type="text" name="trainOthers" required>
					<div ng-messages="trainerForm.trainOthers.$error">
						  <div ng-message="required">This is required.</div>  
					</div>
			</md-input-container>
			<md-input-container class="md-icon-float md-block col-sm-3">
					<label>Trainer Id</label>
					<input ng-model="trainer.id" type="text" name="trainId" required disabled />
			</md-input-container>
		</div>	
	</div>
	<div>	
		<div class="col-sm-12">
				<md-button type="button" class="md-raised md-primary pull-right" ng-click="regTrainer()" ng-disabled="trainerForm.trainerName.$error.required || trainerForm.contNo.$error.required || trainerForm.emaiId.$error.required || trainerForm.course.$error .required|| trainerForm.trainExp.required.$error || trainerForm.trainOthers.$error.required">Submit</md-button>
				<md-button type="button" class="md-raised pull-right" ng-click="clearAll()">Clear All</md-button>
		</div>
	</div>
</div>
<!---
<div class="col-sm-12 accHeader">
	<div class="row">
		<h3 ng-click="accord.courseContent=!accord.courseContent"><i class="material-icons" ng-show="!accord.courseContent">keyboard_arrow_right</i><i class="material-icons" ng-show="accord.newTrainer">keyboard_arrow_down</i>Add New Session</h3>
	</div>
</div>
<div class="col-sm-12" ng-show="accord.courseContent">
<span class="addnewSession" ng-click="addNewsession()"><i class="fa fa-plus-square"></i>Add New Session</span>
	<div class="row" ng-repeat="session in sessions">
	<md-input-container class="col-sm-8">
		<label>Session-{{$index+1}}</label>
			<textarea ng-model="session[$index]" name="session{{$index+1}}" rows="5" md-select-on-focus></textarea>
			<div ng-messages="trainerForm.session.$error">	
			<div ng-message="required">This is required.</div> 
			</div>
	</md-input-container>
	<span class="remSession" ng-click="remsession($index)"><i class="fa fa-minus-square"></i>Remove</span>
	</div>
</div> 
-->
</form>
<div class="col-sm-12 accHeader">
	<div class="row">
		<h3>Our Trainers</h3>
	</div>
</div>
	<div class="col-sm-12">
			<table class="table table-striped table-responsive">
				<thead>
					<tr>
						<th>Name</th>
						<th>ID</th>
						<th>Course</th>
						<th>Other Skills</th>
						<th>Email-ID</th>
						<th>Contact Number</th>
						<th>Experience</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="trainerObj in trainerList">
						<td>{{trainerObj.name}}</td>
						<td>{{trainerObj.id}}</td>
						<td>{{trainerObj.course}}</td>
						<td>{{trainerObj.other}}</td>
						<td>{{trainerObj.emailid}}</td>
						<td>{{trainerObj.mobile}}</td>
						<td>{{trainerObj.exp}}</td>
						<td><md-button type="button" class="md-primary" ng-click="editTrainer(trainerObj)">Edit</md-button>
						<md-button type="button" class="md-primary" ng-click="delTrainer(trainerObj)">Delete</md-button></td>
					</tr>
				</tbody>
			</table>
	</div>	

</md-container>			