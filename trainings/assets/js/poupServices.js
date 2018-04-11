  // POPUP Service
module.service("popupService",function($mdDialog,$mdMedia){
	var useFullScreen = ($mdMedia('sm') || $mdMedia('xs'))  && $scope.customFullscreen;
	this.openDialogEmp = function(scope) {
                        $mdDialog.show({
                            controller: 'empPopupServiceController',
                            template: '<md-container><div class="col-sm-12"><h2>Are you sure to Delete this Employee?</div><md-divider></md-divider><div class="col-sm-12"><md-button class="md-raised pull-right primary" ng-click="delEmpConfirm()">Yes</md-button>' + ' <md-button class="md-raised grid_model_buttons pull-right secondary" ng-click="cancel()">No</md-button></div></md-container>',
                            parent: angular.element(document.body),
                            targetEvent: event,
                            scope: scope,
                            preserveScope: true,
                            clickOutsideToClose: true,
                        });
                    };
	this.openDialogCourse = function(scope) {
                        $mdDialog.show({
                            controller: 'coursePopupServiceController',
                            template: '<md-container><div class="col-sm-12"><h2>Are you sure to Delete this Course?</div><md-divider></md-divider><div class="col-sm-12"><md-button class="md-raised pull-right primary" ng-click="delCourseConfirm()">Yes</md-button>' + ' <md-button class="md-raised grid_model_buttons pull-right secondary" ng-click="cancel()">No</md-button></div></md-container>',
                            parent: angular.element(document.body),
                            targetEvent: event,
                            scope: scope,
                            preserveScope: true,
                            clickOutsideToClose: true,
                        });
                    };					
	this.openDialogStd = function(scope) {
                        $mdDialog.show({
                            controller: 'stdPopupServiceController',
                            template: '<md-container><div class="col-sm-12"><h2>Are you Sure to Delete this Student?</div><md-divider></md-divider><div class="col-sm-12"><md-button class="md-raised pull-right primary" ng-click="delStdConfirm()">Yes</md-button>' + ' <md-button class="md-raised grid_model_buttons pull-right secondary" ng-click="cancel()">No</md-button></div></md-container>',
                            parent: angular.element(document.body),
                            targetEvent: event,
                            scope: scope,
                            preserveScope: true,
                            clickOutsideToClose: true,
                        });
                    };	
	this.openDialogTrnr = function(scope) {
                        $mdDialog.show({
                            controller: 'trnrPopupServiceController',
                            template: '<md-container><div class="col-sm-12"><h2>Are you Sure to Delete this Trainer?</div><md-divider></md-divider><div class="col-sm-12"><md-button class="md-raised pull-right primary" ng-click="delTrnrConfirm()">Yes</md-button>' + ' <md-button class="md-raised grid_model_buttons pull-right secondary" ng-click="cancel()">No</md-button></div></md-container>',
                            parent: angular.element(document.body),
                            targetEvent: event,
                            scope: scope,
                            preserveScope: true,
                            clickOutsideToClose: true,
                        });
                    };		
	this.payslipPopup = function(scope) {
                        $mdDialog.show({
                            controller: 'payslipPopupController',
                            template:'<md-container id="payslipDiv"><md-container style="text-align:center">'
		+'<div class="col-sm-12"><h3>21<sup>st</sup> Century Software Solutions</h3>'
		+'<p><b>#1-234,North Extension Layout,Seethammadhara,Visakhapatnam</b></p>'
	+'</div></md-container>'
	+'<md-container><div class="col-sm-12">'
		+'<p>Salary Statement for the Month of <b>{{empPay.paydate | date:"MMM-yyyy"}}</b></p>'
	+'</div></md-container>'
	+'<md-container><div class="col-sm-12">'
			+'<table id="payslipTable">'
				+'<tbody>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<th style="border:1px solid black;padding:5px">Employee Name</th>'
				+'		<td colspan=4 style="border:1px solid black;padding:5px">{{selEmp.Name}}</td>'
				+'		<th style="border:1px solid black;padding:5px">P.F.No</th>'
				+'		<td colspan=3 style="border:1px solid black;padding:5px">{{selEmp.PF_id}}</td>'
				+'	</tr>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<th style="border:1px solid black;padding:5px">Employee Id</th>'
					+'	<td colspan=4 style="border:1px solid black;padding:5px">{{selEmp.id}}</td>'
						+'<th style="border:1px solid black;padding:5px">E.S.I.No</th>'
						+'<td colspan=3 style="border:1px solid black;padding:5px">{{selEmp.ESI_id}}</td>'
				+'	</tr>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<th style="border:1px solid black;padding:5px">Designation</th>'
				+'		<td colspan=4 style="border:1px solid black;padding:5px">{{selEmp.designation}}</td>'
				+'		<th style="border:1px solid black;padding:5px">Working Days</th>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.wokingdays}}</td>'
				+'		<th style="border:1px solid black;padding:5px">Days Worked</th>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.wokingdays-(empPay.absents+empPay.leaves)}}</td>'
				+'	</tr>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<th style="border:1px solid black;padding:5px">Department</th>'
				+'		<td colspan=4 style="border:1px solid black;padding:5px">{{selEmp.department}}</td>'
				+'		<th style="border:1px solid black;padding:5px">Leave Days</th>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.leaves}}</td>'
				+'		<th style="border:1px solid black;padding:5px">Absents</th>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.absents}}</td>'
				+'	</tr>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<th colspan=2 style="border:1px solid black;padding:5px">Salary</th>'
				+'		<th colspan=2 style="border:1px solid black;padding:5px">Earned</th>'
				+'		<th colspan=2 style="border:1px solid black;padding:5px"></th>'
				+'		<th colspan=3 style="border:1px solid black;padding:5px">Deductions</th>'
				+'	</tr>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<td style="border:1px solid black;padding:5px">Basic</td>'
				+'		<td style="border:1px solid black;padding:5px">{{selEmp.basicpay | number}}</td>'
				+'		<td style="border:1px solid black;padding:5px">Basic</td>'
				+'		<td style="border:1px solid black;padding:5px">{{selEmp.basicpay | number}}</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px"></td>'
				+'		<td style="border:1px solid black;padding:5px">Loan</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px">{{empPay.loan}}</td>'
				+'	</tr>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<td style="border:1px solid black;padding:5px">DA</td>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.da}}</td>'
				+'		<td style="border:1px solid black;padding:5px">DA</td>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.da}}</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px"></td>'
				+'		<td style="border:1px solid black;padding:5px">PFAmount</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px">{{empPay.pfAmnt}}</td>'
				+'	</tr>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<td style="border:1px solid black;padding:5px">HRA</td>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.hra}}</td>'
				+'		<td style="border:1px solid black;padding:5px">HRA</td>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.hra}}</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px"></td>'
				+'		<td style="border:1px solid black;padding:5px">ESI</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px">{{empPay.esiAmnt}}</td>'
				+'	</tr>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<td style="border:1px solid black;padding:5px">Convey</td>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.convey}}</td>'
				+'		<td style="border:1px solid black;padding:5px">Convey</td>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.convey}}</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px"></td>'
				+'		<td style="border:1px solid black;padding:5px">PTAmount</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px">{{empPay.ptAmnt}}</td>'
				+'	</tr>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<td style="border:1px solid black;padding:5px">Special A.</td>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.splA}}</td>'
				+'		<td style="border:1px solid black;padding:5px">Special A</td>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.splA}}</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px"></td>'
				+'		<td style="border:1px solid black;padding:5px">Other</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px">{{empPay.others}}</td>'
				+'	</tr>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<td style="border:1px solid black;padding:5px">Incentive</td>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.insentive}}</td>'
				+'		<td style="border:1px solid black;padding:5px">Incentive</td>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.insentive}}</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px"></td>'
				+'		<td style="border:1px solid black;padding:5px">RoundOff</td>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px">-</td>'
				+'	</tr>'
				+'	<tr style="border:1px solid black;padding:5px">'
				+'		<th style="border:1px solid black;padding:5px">Gross</th>'
				+'		<td style="border:1px solid black;padding:5px">{{selEmp.basicpay+empPay.da+empPay.hra+empPay.convey+empPay.insentive+empPay.splA}}</td>'
				+'		<td style="border:1px solid black;padding:5px">-</td>'
				+'		<td style="border:1px solid black;padding:5px">{{selEmp.basicpay+empPay.da+empPay.hra+empPay.convey+empPay.insentive+empPay.splA}}</td>'
				+'		<th style="border:1px solid black;padding:5px">Total Deductions</th>'
				+'		<td style="border:1px solid black;padding:5px">{{empPay.loan+empPay.pfAmnt+empPay.esiAmnt+empPay.ptAmnt+empPay.others}}</td>'
				+'		<th style="border:1px solid black;padding:5px">NetPay</th>'
				+'		<td colspan=2 style="border:1px solid black;padding:5px">{{(selEmp.basicpay+empPay.da+empPay.hra+empPay.convey+empPay.insentive+empPay.splA)-(empPay.loan+empPay.pfAmnt+empPay.esiAmnt+empPay.ptAmnt+empPay.others)}}</td>'
				+'	</tr>'
				+'</tbody>'
			+'</table></div>'
+'</md-container></md-container><md-container><md-button class="md-raised md-primary pull-right" ng-click="printPaySlip()">Print</md-button><md-button class="md-raised md-primary pull-right" ng-click="savePaySlip()">Submit</md-button><md-button class="md-raised pull-right" ng-click="cancel()">Cancel</md-button></md-conatiner>',
                            parent: angular.element(document.body),
                            targetEvent: event,
                            scope: scope,
                            preserveScope: true,
                            clickOutsideToClose: false,
							fullscreen: useFullScreen
                        });
                    };			
});

 // Employee Popup Controller
module.controller("empPopupServiceController",function($scope,employe,$mdDialog){
	
	$scope.delEmpConfirm = function()
	{
			employe.deleteEmp($scope.delEmpObj)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					employe.getList()
					.success(function(resp){
							if(resp != undefined && resp != null)
							{
								$scope.empList = resp;
							}
						});
					$mdDialog.hide();
				}
			});	
	};
	
	$scope.cancel = function()
	{
		$mdDialog.hide();
    };	       
});

 // Course Popup Controller
module.controller("coursePopupServiceController",function($scope,courseService,$mdDialog){
	
	$scope.delCourseConfirm = function()
	{
		courseService.deleteCourse($scope.delCourseObj)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					courseService.getCourses()
					.success(function(resp){
							if(resp != undefined && resp != null)
							{
								$scope.courseList = resp;
							}
						});
					$mdDialog.hide();
				}
			});				
	};
	
	$scope.cancel = function()
	{
		$mdDialog.hide();
    };	       
});

 // Student Popup Controller
module.controller("stdPopupServiceController",function($scope,studentService,$mdDialog){
	
	$scope.delStdConfirm = function()
	{
			studentService.deleteStd($scope.delStdObj)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					studentService.getList()
					.success(function(resp){
							if(resp != undefined && resp != null)
							{
								$scope.studentList = resp;
							}
						});
					$mdDialog.hide();
				}
			});	
	};
	
	$scope.cancel = function()
	{
		$mdDialog.hide();
    };	       
});
 
 // Trainer Popup  Controller
 module.controller("trnrPopupServiceController",function($scope,trainerService,$mdDialog){
	
	$scope.delTrnrConfirm = function()        //delTrnrObj
	{
			trainerService.deleteTrainer($scope.delTrnrObj)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					trainerService.getList()
					.success(function(resp){
							if(resp != undefined && resp != null)
							{
								$scope.trainerList = resp;
							}
						});
					$mdDialog.hide();
				}
			});	
	};
	
	$scope.cancel = function()
	{
		$mdDialog.hide();
    };	       
});

 // Payslip POPUP Controller
module.controller("payslipPopupController",function($scope,employe,$mdDialog){
	
	$scope.resultEnabled = true;
	$scope.resltSuccess = false;
	$scope.printPaySlip= function()
	{
		
			 
			 w=window.open();
			w.document.write(document.getElementById("payslipDiv").innerHTML);
			w.print();
			w.close();
			$mdDialog.hide();
			
			
	};
	$scope.savePaySlip= function()
	{
			$mdDialog.hide();
			$scope.resultEnabled = true;
			$scope.resltSuccess = true;
	};
	
	       $scope.cancel = function() {
                        $mdDialog.hide();
                    }
});
