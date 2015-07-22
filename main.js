var services;
var total;
var myApp = angular.module('myApp', ['ngRoute']);

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
  $scope.total = 0;

  // Add a Item to the list
  $scope.addItem = function (itemName, itemAmount) {
    $scope.itemName = itemName;
    $scope.itemAmount = itemAmount;
    $scope.total += itemAmount;
    $scope.items.push({
      name: $scope.itemName,
      amount: $scope.itemAmount
    });
  };

  // Delete an item from the list
  $scope.deleteItem = function(index) {
    $scope.total -= $scope.items[index].amount;
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

// This will change the color a text in the navbar
$('#styleMe').click(function()
{
  $(this).css('background-color', 'red');
  $('#styleMe').not(this).css('background-color', 'black');
  
<<<<<<< HEAD
})
=======
})
>>>>>>> 17d1d18348e5b68eddef9be42be36ed54de4cda2
