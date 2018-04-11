// Courses Controller
module.controller("courseController",function($scope,$filter,courseService,popupService){
	
   $scope.course = {};
   $scope.accord = {newCourse:false};
   $scope.success = false;
   $scope.response = "";
   $scope.courseList = [];
   var prevCourseId = "";
   //watch for course id creating
   $scope.$watch("course.name",function(newVal,oldVal){
      if(newVal != undefined && newVal != "" && newVal != null)
      {
		var updatedCode = newVal.replace(/[a-z]/g,"");
		$scope.course.id = updatedCode.replace(/ /g,"");
      }
	  else
	  {
		$scope.course.id = "";
	  }
   });
   //call for course list
   getcourseList();
   //function to get courses list
   function getcourseList()
   {
	  courseService.getCourses()
	  .success(function(resp){
			$scope.courseList = resp;
			//console.log(resp);
	  });
   }
   
   //function to submit course
	$scope.addCourse = function()
	{
			
		if(prevCourseId == "")
		{
			//submit new course
			courseService.addCourse($scope.course)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					$scope.course = {};
					$scope.clearAll();
					getcourseList();
				}
			});
		}
		else{
			//update an existed course
			var courseUpdated = $scope.course;
			courseUpdated.prevId = prevCourseId;
			courseService.updateCourse(courseUpdated)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					$scope.clearAll();
					getcourseList();
				}
			});
		}
	}
   

   // edit course click button
    $scope.editCourse = function(course)
   {
		prevCourseId = course.CourseId;
		$scope.accord.newCourse = true;
		$scope.success = false;    //$scope.empIdDisabled = true;
		$scope.response = "";
		$scope.course.name = course.CourseName;
		$scope.course.id = course.CourseId;
		$scope.course.cost = parseInt(course.CourseCost);
		//$scope.course.createdDate = new Date();
   };
   
   // delete course click button
	$scope.deleteCourse = function(course)
	{
			$scope.success = false;
			$scope.response = "";
			$scope.delCourseObj = course;
			popupService.openDialogCourse($scope);
			$scope.course = {};
	};
   //clear all inputs
   $scope.clearAll = function()
   {
		
		$scope.courseForm.$setPristine();
		$scope.course = {};
		console.log("Submitted");
   };
   
});