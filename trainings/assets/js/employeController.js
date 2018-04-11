// Employee Controller
module.controller("employeeController",function($scope,employe,$filter,popupService){
	
	$scope.emp = {};
	$scope.empList = [];
	$scope.empIdDisabled = false;
	$scope.success = false;
	$scope.response = "";
	$scope.accord = {newEmp:false};
	
	//function to submit employee
	$scope.regEmp = function()
	{
		var exstEmp = [];
		exstEmp =  $filter('filter')($scope.empList, {id:$scope.emp.id});
		if(exstEmp.length<=0)
		{
			//submit new employee
			$scope.emp.DOB = $filter('date')($scope.emp.DOB, "yyyy-MM-dd");
			$scope.emp.DOJ = $filter('date')($scope.emp.DOJ, "yyyy-MM-dd");
			employe.register($scope.emp)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					$scope.emp = {};
					getempList();
				}
			});
		}
		else{
			//update an employee
			$scope.emp.DOB = $filter('date')($scope.emp.DOB, "yyyy-MM-dd");
			$scope.emp.DOJ = $filter('date')($scope.emp.DOJ, "yyyy-MM-dd");
			employe.updateEmp($scope.emp)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					$scope.clearAll();
					getempList();
				}
			});
		}
	}
	//function to update employee    	//editEmp(empObj)
	$scope.editEmp = function(emp)
	{
		$scope.accord.newEmp=true;
		$scope.success = false;
		$scope.empIdDisabled = true;
		$scope.response = "";
		//var empObj = emp;
		$scope.emp = emp;
		$scope.emp.DOB = new Date($scope.emp.DOB);
		$scope.emp.DOJ = new Date($scope.emp.DOJ);
		$scope.emp.basicpay = parseInt($scope.emp.basicpay);
		
	}
	//function to delete an employee
	$scope.delEmp = function(emp)
	{
			$scope.success = false;
			$scope.response = "";
			$scope.delEmpObj = emp;
			popupService.openDialogEmp($scope);
			$scope.emp = {};
	}
	getempList();
	//function to get employee details
	function getempList()
	{
	employe.getList()
	.success(function(resp){
			if(resp != undefined && resp != null)
			{	
				$scope.empList = resp;
				
			}
		});
	}
	//function clear all data
	$scope.clearAll = function()
	{
		$scope.emp = {};
		console.log($scope.emp.basicpay);
		$scope.empIdDisabled = false;
	}
	
});
