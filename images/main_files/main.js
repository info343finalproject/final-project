var myApp = angular.module('myApp', ['ngRoute'])

myApp.config(function($routeProvider)
{
	$routeProvider

	 .when('/', {
      	templateUrl: 'templates/landing.html',
      	controller: 'LandingController',
    })

	.when('/about/', {
		templateUrl: 'templates/about.html',
		controller: 'AboutController'
	})

	.when('/contact/', {
		templateUrl: 'templates/contact.html',
		controller: 'AboutController'
	})

	.when('/gallery/', {
		templateUrl: 'templates/gallery.html',
		controller: 'AboutController'
	})
})

var mail = function()
{
  window.location.href = "mailto:Jeff@pureautomotiverepair.com";
}