// Pay slip Controller
module.controller("payslipController",function($scope,employe,$filter,popupService,employePay){
	
	$scope.empList = [];
	$scope.empPay= {};
	$scope.empPay.paydate = new Date();
	/*$scope.$watch("empPay.paydate",function(newVal,oldVal)
	{
			$scope.updatedEmpList = $filter('filter')($scope.payList,{payDate:$filter('date')(newVal, "yyyy-MM-dd")})
			console.log($scope.updatedEmpList);
	});*/
	// get list of pay's
	employePay.getpayList()
	.success(function(resp){
			if(resp != undefined && resp != null)
			{
				//console.log(resp);
				$scope.payList = resp;
			}
		});
		var payListExisted = []; // empty array 
	//get employee list
	employe.getList()
	.success(function(resp){
			if(resp != undefined && resp != null)
			{
				$scope.empList = resp;
				// didn't get 
				//console.log($scope.payList);
				var payDateExisted = $filter('date')($scope.empPay.paydate, "yyyy-MM-dd");
				//console.log(payDateExisted);
				
				
			    payListExisted = $filter('filter')($scope.payList,{payDate:payDateExisted});
				//console.log(payListExisted);
				if(payListExisted.length >0)
				{
					for(var j=0;j<payListExisted.length;j++)
					{

						var extPayEmp = $filter('filter')($scope.empList,{id:payListExisted[j].empId});
						console.log(extPayEmp[0]);
						$scope.empList.splice($scope.empList.indexOf(extPayEmp[0]),1);
						console.log($scope.empList);
					}
					
				}
				else
				{
						$scope.empList = resp;
				}
			}
		});
	
	// watch for selected employee
	$scope.$watch("selectedEmp",function(empId){
		if(empId != undefined)
		{
			var selEmp =  $filter('filter')($scope.empList,{id:empId});
			$scope.selEmp = selEmp[0];
			$scope.selEmp.basicpay = parseInt($scope.selEmp.basicpay);
			$scope.showEmp = true;
		}
		else
		{
			$scope.selEmp = {};
			$scope.showEmp = false;
		}
		
	});
	$scope.resultEnabled = false;
	//create pay slip
	$scope.createPaySlip = function()
	{
		popupService.payslipPopup($scope);
	}
	
	// save payslip data to database
	$scope.savePayslip = function()
	{
		$scope.empPay.paydate = $filter('date')($scope.empPay.paydate, "yyyy-MM-dd");
		employePay.savePayslip($scope.empPay,$scope.selEmp)
		.success(function(resp){
			if(resp != undefined && resp != null)
			{
				$scope.resultEnabled = true;
				$scope.resltSuccess = true; 
				
			}
		});
	};
	//clear all payslip

});
