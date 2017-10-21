var app = angular.module("app", ["ngRoute"]);

app.config(['$routeProvider',function($routeProvider) 
{
	$routeProvider.when("/home", {
		templateUrl: "templates/home.html",
		controller: "homeCtrl"
	})
	.when("/about", {
		templateUrl: "templates/about.html",
		controller: "aboutCtrl"
	})
	.when("/contact", {
		templateUrl: "templates/contact.html",
		controller: "contactCtrl"
	})
	.otherwise({ redirectTo: "/" });
}]);

app.controller('homeCtrl', ['$scope', function($scope)
{
	$scope.message = "Home";
}])

app.controller('aboutCtrl', ['$scope', function($scope)
{
	$scope.message = "About";
}])

app.controller('contactCtrl', ['$scope', function($scope)
{
	$scope.message = "Contact";
}])



