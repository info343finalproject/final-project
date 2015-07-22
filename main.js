var service
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
})

// About page controller
.controller('AboutController', function($scope){
  $scope.about = "Here's some information about this page."
})

// Services page controller
.controller('ServicesController', function($scope){
  // Item List Arrays
  $scope.items = [];

  // Add a Item to the list
  $scope.addItem = function () {

    $scope.items.push({
      name: $scope.itemName,
      amount: $scope.itemAmount
    });
  };

  // Delete an item from the list
  $scope.deleteItem = function(index) { 
    $scope.items.splice(index, 1);     
  };
})

//Contact page controller
.controller('ContactController', function($scope){
  $scope.url = "http://conference.unavsa.org/wp-content/uploads/2015/06/SEA-pic.jpg"
})

// Validates input from contact page
.controller('validateCtrl', function($scope) {
  $scope.user = '';
  $scope.email = '';
  $scope.subject = '';
  $scope.message = '';
})


var mail = function()
{
  window.location.href = "mailto:Jeff@pureautomotiverepair.com";
}

// Collapses mobile navbar after menu selection
$(document).ready(function () {
  $(".navbar-nav li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });

});