
<md-container layout="column">	
<div class="col-sm-12 accHeader">
<div class="row">
	<h3 ng-click="accord.newPay=!accord.newPay"><i class="material-icons" ng-show="!accord.newPay">keyboard_arrow_right</i><i class="material-icons" ng-show="accord.newPay">keyboard_arrow_down</i>Generate Pay Slip</h3>
</div>
</div>
<div class="col-sm-12" ng-show="accord.newPay">
<div class="row">
<form name="PayslipForm">
<div class="col-sm-12" ng-if="resultEnabled">
<div class="alert alert-success" ng-show="resltSuccess">
	Successfully submitted payslip
</div>
<div class="alert alert-warning" ng-show="!resltSuccess">
	You are not saved payslip
</div>
</div>
<div class="col-sm-12">
		<div class="col-sm-3">
			<md-input-container class="md-icon-float md-block">
					<label>Payment Date*</label>
					<input ng-model="empPay.paydate" type="date" name="PayDate" readonly required>										<div ng-messages="PayslipForm.PayDate.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
		</div>
		<md-input-container class="col-sm-2">
				<label>Select Employee Id*</label>
					<md-select ng-model="selectedEmp" name="psEid" required >
					  <md-option ng-repeat="empObj in empList" value="{{empObj.id}}">
						{{empObj.id}}
					  </md-option>
					</md-select>					<div ng-messages="PayslipForm.psEid.$error">						  <div ng-message="required">This is required.</div>  					</div>		</md-input-container>
		
	
		<div class="col-sm-3">
			<md-input-container class="md-icon-float md-block">
					<label>No.of Working days*</label>
					<input ng-model="empPay.wokingdays" type="number" name="workingDays" required>                                         					<div ng-messages="PayslipForm.workingDays.$error">						  <div ng-message="required">This is required.</div>  					</div>						
			</md-input-container>
		</div>
		<div class="col-sm-2">
			<md-input-container class="md-icon-float md-block">
					<label>No.of Absents*</label>
					<input ng-model="empPay.absents" type="number" name="absents" required>										<div ng-messages="PayslipForm.absents.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
		</div>
		<div class="col-sm-2">
			<md-input-container class="md-icon-float md-block">
					<label>No.of Leaves*</label>
					<input ng-model="empPay.leaves" type="number" name="leaves" required>                    <div ng-messages="PayslipForm.leaves.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
		</div>
</div>	
<div class="col-sm-12 empdetails" ng-if="showEmp">
	<div class="col-sm-4"><label>Name:</label>{{selEmp.Name}}</div>
	<div class="col-sm-4"><label>Designation:</label>{{selEmp.designation}}</div>
	<div class="col-sm-4"><label>Deprtment:</label>{{selEmp.department}}</div>
	<div class="col-sm-4"><label>ESI ID:</label>{{selEmp.ESI_id}}</div>
	<div class="col-sm-4"><label>PF ID:</label>{{selEmp.PF_id}}</div>
	<div class="col-sm-4"><label>Basic:</label>{{selEmp.basicpay}}</div>
	<div class="col-sm-4">
			<label>Presents days:</label>
			<label>{{empPay.wokingdays-(empPay.absents+empPay.leaves)}}</label>
	</div>	<div class="col-sm-4">			<label>Date of Joining:</label>			<label>{{selEmp.DOJ}}</label>	</div>
</div>
<div class="col-sm-12">
		<md-subheader class="md-primary">Salary Earned</md-subheader>
</div>
<div class="col-sm-12">	
	<div class="col-sm-2">
			<md-input-container class="md-icon-float md-block" required>
					<label>DA*</label>
					<input ng-model="empPay.da" type="number" name="da">					<div ng-messages="PayslipForm.da.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
	</div>
	<div class="col-sm-2">
			<md-input-container class="md-icon-float md-block">
					<label>HRA</label>
					<input ng-model="empPay.hra" type="number" name="hra" required>					<div ng-messages="PayslipForm.hra.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
	</div>
	<div class="col-sm-2">
			<md-input-container class="md-icon-float md-block">
					<label>Convey.*</label>
					<input ng-model="empPay.convey" type="number" name="convey" required>					<div ng-messages="PayslipForm.convey.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
	</div>
	<div class="col-sm-3">
			<md-input-container class="md-icon-float md-block">
					<label>Special Allowence</label>
					<input ng-model="empPay.splA" type="number" name="splA" required>					<div ng-messages="PayslipForm.splA.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
	</div>
	<div class="col-sm-2">
			<md-input-container class="md-icon-float md-block">
					<label>Incentives</label>
					<input ng-model="empPay.insentive" type="number" name="insentive" required>					<div ng-messages="PayslipForm.insentive.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
	</div>
	<div class="col-sm-12">
			<label class="pull-right">Total Earned:{{selEmp.basicpay+empPay.da+empPay.hra+empPay.convey+empPay.insentive+empPay.splA}}</label>
	</div>
</div>
<div class="col-sm-12">
		<md-subheader class="md-primary">Deductions</md-subheader>
</div>
<div class="col-sm-12">	
	<div class="col-sm-2">
			<md-input-container class="md-icon-float md-block">
					<label>Loan</label>
					<input ng-model="empPay.loan" type="number" name="loan" required>					<div ng-messages="PayslipForm.loan.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
	</div>
	<div class="col-sm-2">
			<md-input-container class="md-icon-float md-block">
					<label>PF amount</label>
					<input ng-model="empPay.pfAmnt" type="number" name="pfAmnt" required>					<div ng-messages="PayslipForm.pfAmnt.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
	</div>
	<div class="col-sm-2">
			<md-input-container class="md-icon-float md-block">
					<label>ESI.</label>
					<input ng-model="empPay.esiAmnt" type="number" name="esiAmnt" required>					<div ng-messages="PayslipForm.esiAmnt.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
	</div>
	<div class="col-sm-2">
			<md-input-container class="md-icon-float md-block">
					<label>PT Amount</label>
					<input ng-model="empPay.ptAmnt" type="number" name="ptAmnt" required>					<div ng-messages="PayslipForm.ptAmnt.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
	</div>
	<div class="col-sm-2">
			<md-input-container class="md-icon-float md-block">
					<label>Others</label>
					<input ng-model="empPay.others" type="number" name="others" required>					<div ng-messages="PayslipForm.others.$error">						  <div ng-message="required">This is required.</div>  					</div>
			</md-input-container>
	</div>
	<div class="col-sm-12">
			<label class="pull-right">Total Deductions:{{empPay.loan+empPay.pfAmnt+empPay.esiAmnt+empPay.ptAmnt+empPay.others}}</label>
	</div>
</div>
<div class="col-sm-12 empdetails">	
	<h4>Summary of Payslip</h4>
	<label class="col-sm-4">Gross Salary:{{selEmp.basicpay+empPay.da+empPay.hra+empPay.convey+empPay.insentive+empPay.splA}}</label>
	<label class="col-sm-4">Total Deductions:{{empPay.loan+empPay.pfAmnt+empPay.esiAmnt+empPay.ptAmnt+empPay.others}}</label>
	<label class="col-sm-4">	Net Pay:{{(selEmp.basicpay+empPay.da+empPay.hra+empPay.convey+empPay.insentive+empPay.splA)-(empPay.loan+empPay.pfAmnt+empPay.esiAmnt+empPay.ptAmnt+empPay.others)}}</label>
</div>
<div class="col-sm-12">	
				<md-button type="button" class="md-raised md-primary pull-right"  ng-disabled="PayslipForm.psEid.$error.required || PayslipForm.PayDate.$error.required || PayslipForm.workingDays.$error.required || PayslipForm.absents.$error.required || PayslipForm.leaves.$error.required || PayslipForm.da.$error.required || PayslipForm.hra.$error.required || PayslipForm.convey.$error.required" ng-click="savePayslip()">Save</md-button>
				<md-button type="button" class="md-raised md-primary pull-right" ng-click="createPaySlip()" ng-disabled="PayslipForm.psEid.$error.required || PayslipForm.PayDate.$error.required || PayslipForm.workingDays.$error.required || PayslipForm.absents.$error.required || PayslipForm.leaves.$error.required || PayslipForm.da.$error.required || PayslipForm.hra.$error.required || PayslipForm.convey.$error.required">Create Payslip</md-button>
				<md-button type="reset" class="md-raised pull-right" ng-click="clearAll()">Clear All</md-button>
</div>
</form>
</div>
</div>
<div class="col-sm-12 accHeader">
<div class="row">
	<h3>List of Pay Slip's</h3>
</div>
</div>
<div class="col-sm-12">
<div class="row">
	<table class="table">
		<thead>
			<tr>
				<th>EmpId</th>
				<th>Pay Date</th>
				<th>Work(Days)</th>
				<th>Present</th>
				<th>Leaves</th>
				<th>Absents</th>
				<th>Total Earnings(Rs.)</th>
				<th>Total Deductions(Rs.)</th>
				<th>Net Pay(Rs.)</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="pay in payList">
				<td>{{pay.empId}}</td>
				<td>{{pay.payDate}}</td>
				<td>{{pay.workingDays}}</td>
				<td>{{pay.workingDays-(pay.leaves+pay.absents)}}</td>
				<td>{{pay.leaves}}</td>
				<td>{{pay.absents}}</td>
				<td>{{pay.EarnedTotal}}</td>
				<td>{{pay.DeductionTotal}}</td>
				<td>{{pay.Netpay}}</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
</md-container>
