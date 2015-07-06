var app = angular.module('app', ['ngRoute']);

app.config(function ($routeProvider) {
  $routeProvider
    .when('/:message',
    {
      templateUrl: "app.html",
      controller: "AppCtrl"
    }
  )
});

app.controller("AppCtrl", function ($scope, $routeParams) {
  $scope.model = {
    message: $routeParams.message
  }
});