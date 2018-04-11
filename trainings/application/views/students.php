<md-container layout="column">	
<h2 style="text-align:center">Student Details</h2>
<form name="stdForm">
	<div class="col-sm-12">
		<div class="alert alert-success" dismiss-on-timeout="2000" ng-if="success">
			{{response}}
		</div>
		<!--<div> 
			<alert class="alert" type="alert.type" dismiss-on-timeout="2000"
			close="alert.close()"> {{response}}</alert>
		</div>-->
		<div class="row accHeader">
			<h3 ng-click="accord.newStudent=!accord.newStudent"><i class="material-icons" ng-show="!accord.newStudent">keyboard_arrow_right</i><i class="material-icons" ng-show="accord.newStudent">keyboard_arrow_down</i>Add New Student</h3>
		</div>
		<!--<div class="col-sm-12">
			<h2>Add New Student</h2>
		</div>-->
		<div class="col-sm-12" ng-show="accord.newStudent">
			<div class="col-sm-4" >
				<md-input-container class="md-icon-float md-block">
					<label>Student Name</label>
					<input ng-model="student.name" type="text" name="stdName" required>
					<div ng-messages="stdForm.stdName.$error">
						  <div ng-message="required">This is required.</div>  
					</div>						
				</md-input-container>
				<md-input-container class="md-icon-float md-block">
					<label>Student ID</label>
					<input ng-model="student.id" type="text" name="stdId" required>
				    <div ng-messages="stdForm.stdId.$error">
						<div ng-message="required">This is required.</div>  
					</div>
				</md-input-container>		
			</div>	
			<div class="col-sm-4">
				<md-input-container class="md-icon-float md-block">
					<label>Email-Id</label>
					<input ng-model="student.emailid" type="text" name="stdMailid" required>
					<div ng-messages="stdForm.stdMailid.$error">
						  <div ng-message="required">This is required.</div>  
					</div>
				</md-input-container>
				<md-input-container class="md-icon-float md-block">
					<label>Contact Number</label>
					<input ng-model="student.mobile" type="text" name="stdMobile" required>
					<div ng-messages="stdForm.stdMobile.$error">
						  <div ng-message="required">This is required.</div>  
					</div>
				</md-input-container>
			</div>	
			<div class="col-sm-4">
				<md-input-container class="md-icon-float md-block">
					<label>Student Course</label>
					<md-select ng-model="student.course" multiple="true">
					  <md-option ng-repeat="course in courseList"  name="stdCourse" value="{{course.CourseId}}" >
						{{course.CourseName}}
					  </md-option>
					  <div ng-messages="stdForm.stdCourse.$error">
						  <div ng-message="required">This is required.</div>  
					  </div>
					</md-select>
					<!--<input ng-model="std.course" type="text"  required>--->
					<div ng-messages="stdForm.stdCourse.$error">
						  <div ng-message="required">This is required.</div>  
					</div>
				</md-input-container>
				<md-input-container class="md-icon-float md-block">
					<label>Student Zone</label>
					<input ng-model="student.zone" type="text" name="stdZone" required>
					<div ng-messages="stdForm.stdZone.$error">
						  <div ng-message="required">This is required.</div>  
					</div>
				</md-input-container>
			</div>	
			<div class="col-sm-12">
				<md-button type="button" class="md-raised md-primary pull-right" ng-click="regStudent()" ng-disabled="stdForm.stdName.$error.required || stdForm.stdId.$error.required || stdForm.stdMailid.$error.required || stdForm.stdMobile.$error.required || stdForm.stdCourse.$error.required || stdForm.stdZone.$error.required ">Submit</md-button>
				<md-button type="button" class="md-raised pull-right" ng-click="clearAll()">Clear All</md-button>
			</div>
		</div>
	</div>
			<div class="col-sm-12">
				<div class="row accHeader">
					<h3>Students List</h3>
				</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>ID</th>
						<th>Email ID</th>
						<th>Contact Number</th>
						<th>Course Name</th>
						<th>Timezone</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="studentObj in studentList">
						<td>{{studentObj.name}}</td>
						<td>{{studentObj.id}}</td>
						<td>{{studentObj.emailid}}</td>
						<td>{{studentObj.mobile}}</td>
						<td>{{studentObj.course}}</td>
						<td>{{studentObj.zone}}</td>
						<td><md-button type="button" class="md-primary" ng-click="editStd(studentObj)">Edit</md-button>
						<md-button type="button" class="md-primary" ng-click="delStd(studentObj)">Delete</md-button></td>
					</tr>
				</tbody>
			</table>
			
		</div>
		</form>
	</md-content>	