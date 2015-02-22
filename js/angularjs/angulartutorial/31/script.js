var app = angular.module("app", ['ngRoute']);

app.config(['$routeProvider',function($routeProvider) {
  $routeProvider.when("/",
    {
      templateUrl: "app.html",
      controller: "AppCtrl"
    }
  );
}]);

app.controller("AppCtrl", function($scope){
  $scope.model = {
    message: "This is my app!!!"
  }
});