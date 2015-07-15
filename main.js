var myApp = angular.module('myApp', ['ngRoute'])

myApp.config(function($routeProvider) {
  $routeProvider
    .when('/', {
      	templateUrl: 'templates/landing.html',
      	controller: 'LandingController',
    })
   	.when('/services/', {
    	templateUrl: 'templates/services.html',
    	controller: 'ServicesController',
  	})
   	.when('/about/', {
    	templateUrl: 'templates/about.html',
    	controller: 'AboutController',
  	})
    .when('/contact/', {
      templateUrl: 'templates/contact.html',
      controller: 'ContactController',
    })
})

// Landing page controller
.controller('LandingController', function($scope){
  $scope.number = 10
})

// About page controller
.controller('AboutController', function($scope){
  $scope.about = "Here's some information about this page."
})

// Services controller
.controller('ServicesController', function($scope){
  $scope.url = "http://conference.unavsa.org/wp-content/uploads/2015/06/SEA-pic.jpg"
})

//Contact controller
.controller('ContactController', function($scope){
  $scope.url = "http://conference.unavsa.org/wp-content/uploads/2015/06/SEA-pic.jpg"
})