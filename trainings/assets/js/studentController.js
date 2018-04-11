// Student controller
module.controller("studentController",function($scope,studentService,courseService,$filter,popupService){
	
	$scope.accord = {newStudent:false};
	$scope.student = {};
	$scope.sessions = {};
	
			// To get the courses from the coursesService
			courseService.getCourses().success(function(resp){
						$scope.courseList = resp;
			});
			
	// To add a new student or to edit an existing student
	$scope.regStudent = function()
	{
		var exstStudent = [];
		exstStudent =  $filter('filter')($scope.studentList, {id:$scope.student.id});
		if(exstStudent.length<=0)
		{
			//submit new student
			//$scope.emp.DOB = $filter('date')($scope.emp.DOB, "yyyy-MM-dd");
			//$scope.emp.DOJ = $filter('date')($scope.emp.DOJ, "yyyy-MM-dd");
			studentService.register($scope.student)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					$scope.student = {};
					getStudentsList();
				}
			});
		}
		else
		{
			//update the Student
			//$scope.emp.DOB = $filter('date')($scope.emp.DOB, "yyyy-MM-dd");
			//$scope.emp.DOJ = $filter('date')($scope.emp.DOJ, "yyyy-MM-dd");
			studentService.updateStd($scope.student)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					$scope.clearAll();
					getStudentsList();
				}
			});
		}
	}
	getStudentsList();
	//function to get student details
	function getStudentsList()
	{
		studentService.getList()
		.success(function(resp){
				if(resp != undefined && resp != null)
				{	
					$scope.studentList = resp;
				}
			});
	}
	//function to update student    // editStd(studentObj)
	$scope.editStd = function(student)
	{
		$scope.accord.newStudent = true;
		$scope.success = false;    //$scope.empIdDisabled = true;
		$scope.response = "";
		$scope.student = student;  // Assign the coming object to the real/actual object
	}
	//function to delete student
	$scope.delStd = function(student)
	{
			$scope.success = false;
			$scope.response = "";
			$scope.delStdObj = student;   // pass this object and take the confirmatioin from the popup 
			popupService.openDialogStd($scope);
			$scope.student = {};
	}
	
	// to clear all the data
	$scope.clearAll = function()
	{
		$scope.student = {};
	}
	/*// only to add new student
	$scope.regStudent = function()
	{
		studentService.register($scope.student)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					$scope.student = {};
					getStudentsList();
				}
		});
	};*/
	
});