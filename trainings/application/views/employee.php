<md-container layout="column">	<form name="empForm">
<h2 style="text-align:center">Employee Details</h2>
		<div class="col-sm-12 accHeader"><h3 ng-click="accord.newEmp=!accord.newEmp"><i class="material-icons" ng-show="!accord.newEmp">keyboard_arrow_right</i><i class="material-icons" ng-show="accord.newEmp">keyboard_arrow_down</i>Add New Employee</h3>
		</div>
		<div class="col-sm-12" ng-show="accord.newEmp">
			<div class="alert alert-success" ng-if="success">
				{{response}}
				<span class="pull-right" ng-click="success=true">X</span>
			</div>
		<div class="col-sm-12">
			<md-subheader class="md-primary">Personal Info</md-subheader>
		</div>
		<div class="col-sm-4">
				<md-input-container class="md-icon-float md-block">
					<label>Employee Id*</label>
					<input ng-model="emp.id" type="text" name="empId" ng-disabled="empIdDisabled" required>					<div ng-messages="empForm.empId.$error">						  <div ng-message="required">This is required.</div>  					</div>
				</md-input-container>
				<md-input-container class="md-icon-float md-block">
					<label>Designation*</label>
					<input ng-model="emp.designation" type="text" name="empDesg" required>					<div ng-messages="empForm.empDesg.$error">						  <div ng-message="required">This is required.</div>  					</div>
				</md-input-container>
		</div>
		<div class="col-sm-4">
				<md-input-container class="md-icon-float md-block">
					<label>Employee Name*</label>
					<input ng-model="emp.Name" type="text" name="empName" required>					<div ng-messages="empForm.empName.$error">						  <div ng-message="required">This is required.</div>  					</div>
				</md-input-container>
				<md-input-container class="md-icon-float md-block">
					<label>Date Of Birth</label>
					<input ng-model="emp.DOB" type="date" name="empDOB">					
				</md-input-container>
		</div>
		<div class="col-sm-4">
			<md-input-container class="md-icon-float md-block">
					<label>Department*</label>
					<input ng-model="emp.department" type="text" name="empDept" required>					<div ng-messages="empForm.empDept.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>			<md-input-container class="md-icon-float md-block">					<label>Date Of Joining*</label>					<input ng-model="emp.DOJ" type="date" name="empDOJ" required>					<div ng-messages="empForm.empDOJ.$error">						  <div ng-message="required">This is required.</div>  					</div>			</md-input-container>
		</div>
		<div class="col-sm-12">
			<md-subheader class="md-primary">Salary Info</md-subheader>	
		</div>
		<div class="col-sm-4">
				<md-input-container class="md-icon-float md-block">
					<label>Basic Pay*</label>
					<input ng-model="emp.basicpay" type="number" name="basicpay" ng-pattern="/^[0-9]*$/" required>					
					<div ng-messages="empForm.basicpay.$error && empForm.basicpay.$dirty">						  
						<div ng-message="required">This is required.</div>  						
						<div ng-message="pattern">This accepts numbers only.</div>
					</div>
				</md-input-container>	
		</div>
		<div class="col-sm-4">
				<md-input-container class="md-icon-float md-block">
					<label>Provident Fund Id</label>
					<input ng-model="emp.PF_id" type="text" name="empPFID">					
				</md-input-container>	
		</div>
		<div class="col-sm-4">
				<md-input-container class="md-icon-float md-block">
					<label>Employee Serivice Insurence Id</label>
					<input ng-model="emp.ESI_id" type="text" name="empESIID">
				</md-input-container>
		</div>
		<div class="col-sm-12">
				<md-button type="button" class="md-raised md-primary pull-right" ng-click="regEmp()" ng-disabled="empForm.empId.$error.required || empForm.empDesg.$error.required || empForm.empName.$error.required || empForm.empDept.$error.required || empForm.empDOJ.$error.required || empForm.basicpay.$error.required || empForm.basicpay.$error.pattern">Submit</md-button>
				<md-button type="button" class="md-raised pull-right" ng-click="clearAll()">Clear All</md-button>
		</div>		

		</div>
		<div class="col-sm-12 accHeader">
			<h3>Employees List</h3>
		</div>
		<div class="col-sm-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Desgination</th>
						<th>Date of Joining</th>
						<th>Department</th>
						<th>Basic Pay</th>
						<th>Date Of Birth</th>
						<th>PF ID</th>
						<th>ESI ID</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="empObj in empList">
						<td>{{empObj.id}}</td>
						<td>{{empObj.Name}}</td>
						<td>{{empObj.designation}}</td>
						<td>{{empObj.DOJ | date:MM/dd/YYYY}}</td>
						<td>{{empObj.department}}</td>
						<td>{{empObj.basicpay}}</td>
						<td>{{empObj.DOB | date:MM/dd/YYYY}}</td>
						<td>{{empObj.PF_id}}</td>
						<td>{{empObj.ESI_id}}</td>
						<td><md-button type="button" class="md-primary" ng-click="editEmp(empObj)">Edit</md-button>
						<md-button type="button" class="md-primary" ng-click="delEmp(empObj)">Delete</md-button></td>
					</tr>
				</tbody>
			</table>
		</div>
	</form>
</md-container>

