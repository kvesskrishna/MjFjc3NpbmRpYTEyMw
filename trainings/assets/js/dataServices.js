//Factory for Courses     
module.factory("courseService", function($http, $location) {
	var baseUrl = $location.path();
    return {
        addCourse: function(course) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/Courses/addCourse',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : course
            });
        },
		updateCourse: function(course) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/Courses/updateCourse',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : course
            });
        },
		deleteCourse: function(course) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/Courses/deleteCourse',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : course
            });
        },
		getCourses: function() {
            return $http({
                method : 'POST',
                url :'http://www.21cssindia.com/trainings/index.php/Courses/getCourses',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
	};
});
//Factory for Trianer
module.factory("trainerService", function($http, $location) {
	var baseUrl = $location.path();
    return {
        register: function(trainer) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/Trainers/addTrainer',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : trainer
            });
        },
		updateTrainer: function(trainer) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/Trainers/updateTrainer',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : trainer
            });
        },
		deleteTrainer: function(trainer) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/Trainers/deleteTrainer',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : trainer
            });
        },
		getList: function() {
            return $http({
                method : 'POST',
                url :'http://www.21cssindia.com/trainings/index.php/Trainers/getTrainers',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
            });
        }
	};
});

//Factory for Student 
module.factory("studentService", function($http, $location) {
	var baseUrl = $location.path();
    return {
        register: function(student) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/Students/addStudent',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : student
            });
        },
		updateStd: function(student) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/Students/updateStd',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : student
            });
        },
		deleteStd: function(student) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/Students/deleteStd',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : student
            });
        },
		getList: function() {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/Students/getStdList',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
            });
        }
	};
});

//Factory for employee pay data
module.factory("employePay", function($http, $location) {
	var baseUrl = $location.path();
    return {
        savePayslip: function(emp,selEmp) {
			emp.empId = selEmp.id;
			emp.basicpay = selEmp.basicpay;
			//console.log(emp);
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/EmpPay/addEmpPay',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : emp
            });
        },
		getpayList: function() {
			
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/EmpPay/getPays',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        }
	};
});
//Factoy for Employee objects
module.factory("employe", function($http, $location) {
	
    return {
        register: function(emp) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/EmployeeRegisterForm',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : emp
            });
        },
		updateEmp: function(emp) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/EmployeeRegisterForm/updateEmp',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : emp
            });
        },
		
		deleteEmp: function(emp) {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/EmployeeRegisterForm/deleteEmp',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
                data : emp
            });
        },
		 getList: function() {
            return $http({
                method : 'POST',
                url : 'http://www.21cssindia.com/trainings/index.php/EmployeeRegisterForm/getList',
				headers : {'Content-Type': 'application/x-www-form-urlencoded'},
            });
        },
    };
});
