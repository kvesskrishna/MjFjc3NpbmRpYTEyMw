// Trainer controller
module.controller("trainerController",function($scope,$filter,trainerService,courseService,popupService){
	
	$scope.accord = {newTrainer:false};
	$scope.editMode = false;
	$scope.trainer = {};
	
			// To get the courses from the coursesService
			courseService.getCourses().success(function(resp){
						$scope.courseList = resp;
			});
			
	// To add a new trainer or to edit an existing trainer
	$scope.regTrainer = function()
	{
		var exstTrainer = [];
		$scope.editMode = false;
		exstTrainer =  $filter('filter')($scope.trainerList, {id:$scope.trainer.id});
		if(exstTrainer.length<=0)
		{
			//submit new trainer
			trainerService.register($scope.trainer)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					$scope.trainer = {};
					getTrainersList();
				}
			});
		}
		else
		{
			//update the Trainer
			console.log($scope.trainer);
			debugger;
			trainerService.updateTrainer($scope.trainer)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					$scope.clearAll();
					getTrainersList();
				}
			});
		}
	}
    
	// Automatically generate trainer id
	$scope.$watch("trainer.course",function(newVal,oldVal){
	if(!$scope.editMode)
	{
			
      if(newVal != undefined && newVal != "" && newVal != null)
      {
		var courseCode = newVal;
		courseCode += '-T';//PHP-T23
		var lastId = "";
		var lastTid = 0;
		for(var t =0;t<$scope.trainerList.length;t++)
		{
			if($scope.trainerList[t].id.match(courseCode))
			{
				//PHP-T23
				lastId = $scope.trainerList[t].id; 
				lastTid = lastId.split(courseCode);
				
				//console.log(lastId);
			}
		}
		if(lastId == "")
				courseCode += '1';
		else
		{
			lastId = lastId.split(courseCode);
			courseCode += parseInt(lastId[1])+1;
		}	
		
		$scope.trainer.id = courseCode;
      }
	  else
	  {
		$scope.trainer.id = "";
	  }
	}
	
   });	
	
	//function to edit trainer    // editStd(studentObj)
	$scope.editTrainer = function(trainerObj)
	{
		$scope.accord.newTrainer = true;
		$scope.editMode = true;
		$scope.success = false;           //$scope.empIdDisabled = true;
		$scope.response = "";
		$scope.trainer = trainerObj;         
		$scope.trainer.mobile = parseInt($scope.trainer.mobile);   
		$scope.trainer.exp = parseInt($scope.trainer.exp); 
	}
	
	//function to delete trainer
	$scope.delTrainer = function(trainerObj)
	{
		$scope.success = false;
		$scope.response = "";
		$scope.delTrnrObj = trainerObj;  
		popupService.openDialogTrnr($scope);		// pass this object and take the confirmatioin from the popup  i.e. popupService.openDialogTrnr($scope);
		$scope.trainer = {};
	}
	
  /* // add new trianer
	$scope.regTrainer = function()
	{
		trainerService.register($scope.trainer)
			.success(function(resp){
				if(resp != undefined && resp != null)
				{
					$scope.success = true;
					$scope.response = resp;
					$scope.trainer = {};
					getTrainersList();
				}
			});
	};*/
	//function clear all data
	$scope.clearAll = function()
	{
		$scope.trainer = {};
	}
	
	//function to get Trainer details
	getTrainersList();
	function getTrainersList()
	{
		trainerService.getList()
		.success(function(resp){
				if(resp != undefined && resp != null)
				{	
					$scope.trainerList = resp;
				}
			});
	}
	
	// add new session 
	$scope.addNewsession = function()
	{
		$scope.sessions.push({});
	};
	
	//remove session
	$scope.remsession = function(indx)
	{
		$scope.sessions.splice(indx,1);
	};
});
