var module = angular.module("trainingApp",['ngMaterial','ngMessages','ui.router']);

module.config(['$httpProvider','$stateProvider','$urlRouterProvider', function ($httpProvider,$stateProvider,$urlRouterProvider) {
  // Intercept POST requests, convert to standard form encoding
  $httpProvider.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
  $httpProvider.defaults.transformRequest.unshift(function (data, headersGetter) {
    var key, result = [];

    if (typeof data === "string")
      return data;

    for (key in data) {
      if (data.hasOwnProperty(key))
        result.push(encodeURIComponent(key) + "=" + encodeURIComponent(data[key]));
    }
    return result.join("&");
  });
 
  
  //$urlRouterProvider.when('/','/course');
     $stateProvider
          .state('course', {
            url: '/course',
            templateUrl: 'index.php/Courses',
            controller:'courseController'
			})
          .state('trainer', {
            url: '/trainer',
			templateUrl: 'index.php/trainers',
            controller:'trainerController'
          })
          .state('students', {
            url: '/students',
			templateUrl: 'index.php/students',
            controller:'studentController'
          })
		  .state('report', {
            url: '/report',
			templateUrl: 'index.php/students',
            controller:'studentController'   
          })
		  .state('payslip', {
            url: '/payslip',
			templateUrl: 'index.php/EmpPay',
            controller:'payslipController'   
          })
		  .state('employee', {
            url: '/employee',
			templateUrl: 'index.php/EmployeeRegisterForm',
            controller:'employeeController'  
          })
		  .state("otherwise", {
				url: '',
            templateUrl: 'index.php/Courses',
            controller:'courseController'
		  });
}]);
/*module.run(
  [          '$rootScope', '$state', '$stateParams',
    function ($rootScope,   $state,   $stateParams) {

    $rootScope.$state = $state;
    $rootScope.$stateParams = $stateParams;
    }
  ]
);*/


