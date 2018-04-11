<?php

?>
<md-content class="col-sm-12">
<form name="courseForm">
<h2 style="text-align:center">Add New Course</h2>
	<div class="col-sm-12">
		<div class="alert alert-success" ng-if="success">
			{{response}}
		</div>
		<!--<div class="col-sm-12">
			<md-subheader class="md-primary">Course Information</md-subheader>
		</div>-->
		<div class="row accHeader">
			<h3 ng-click="accord.newCourse=!accord.newCourse"><i class="material-icons" ng-show="!accord.newCourse">keyboard_arrow_right</i><i class="material-icons" ng-show="accord.newCourse">keyboard_arrow_down</i>Add New Course</h3>
		</div>
        <div class="col-sm-12" ng-show="accord.newCourse">
		   <div class="row">
				<md-input-container class="md-icon-float md-block col-sm-4">
					<label>Course Name*</label>
					<input ng-model="course.name" type="text" name="name" ng-disabled="empIdDisabled" required>
					<div ng-messages="courseForm.name.$error">
						  <div ng-message="required">This is required.</div>  
					</div>
				</md-input-container>
				<md-input-container class="md-icon-float md-block col-sm-4">
					<label>Course ID*</label>
					<input ng-model="course.id" type="text" name="couId" required>
				        <div ng-messages="courseForm.couId.$error">
					     <div ng-message="required">This is required.</div>  
					</div>
				</md-input-container>
			    <md-input-container class="md-icon-float md-block col-sm-4">
					<label>Course Cost*</label>
					<input ng-model="course.cost" type="number" name="couCost" required>
           			<div ng-messages="courseForm.couCost.$error">
					    <div ng-message="required">This is required.</div>  
					</div>	
			    </md-input-container>	

				<!--	<input ng-model="course.createdDate" type="hidden" name="couDate" required> -->
           	
			</div>
			<div class="row">
				<md-button type="button" class="md-raised md-primary pull-right" ng-click="addCourse()" ng-disabled="courseForm.couname.$error.reequired || courseForm.couId.$error.required || courseForm.couCost.$error.required">Submit</md-button>
				<md-button type="button" class="md-raised pull-right" ng-click="clearAll()">Clear All</md-button>
			</div>
		</div>
	</div>
		<div class="col-sm-12">
			<h2>Courses List</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Course Name</th>
						<th>Course ID</th>
						<th>Fees Details</th>
						<th>Quick Action</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="courseObj in courseList">
						<td>{{courseObj.CourseName}}</td>
						<td>{{courseObj.CourseId}}</td>
						<td>{{courseObj.CourseCost}}</td>
						<!--<td>{{courseObj.CreatedOn}}</td>-->
						<td><md-button type="button" class="md-primary" ng-click="editCourse(courseObj)">Edit</md-button>
						<md-button type="button" class="md-primary" ng-click="deleteCourse(courseObj)">Delete</md-button></td>
					</tr>
				</tbody>
			</table>
		</div>
</form>
</md-content>		