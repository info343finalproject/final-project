var services
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
  services = $scope.items = [];

  // Add a Item to the list
  $scope.addItem = function (itemName, itemAmount) {
    $scope.itemName = itemName;
    $scope.itemAmount = itemAmount;
    $scope.items.push({
      name: $scope.itemName,
      amount: $scope.itemAmount
    });
  };

  // Delete an item from the list
  $scope.deleteItem = function(index) { 
    $scope.items.splice(index, 1);     
  };

  //Toggle visibility, if element is visible it will be hidden and vice versa.
  $scope.isVisible = false;
  $scope.showHide = function () {
    $scope.isVisible = $scope.isVisible ? false : true;
  }
})

//Contact page controller
.controller('ContactController', function($scope){
  $scope.url = "http://conference.unavsa.org/wp-content/uploads/2015/06/SEA-pic.jpg"
})

// Validates or clears input from contact page
.controller('validateCtrl', function($scope) {
  $scope.user = '';
  $scope.email = '';
  $scope.subject = '';
  $scope.message = '';
  
  $scope.resetForm = function () {
      $scope.user = '';
      $scope.email = '';
      $scope.subject = '';
      $scope.message = '';
      $scope.myForm.$setPristine();
    }
})

// Collapses mobile navbar after menu selection
$(document).ready(function () {
  $(".navbar-nav li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });
});

/*
function clicked(item)
{
  $('#cart').append("<p>"+ item + "</p>");
}*/

$('li').click(function()
{
    alert($(this).text())
})

