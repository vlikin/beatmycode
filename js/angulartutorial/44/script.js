var myApp = angular.module('app', []);

myApp.factory('Data', function () {
  return { message: "I'm data from a service" };
});

myApp.controller('FirstCtrl', function($scope, Data) {
  $scope.data = Data;
});

myApp.controller('SecondCtrl', function($scope, Data) {
  $scope.data = Data;
});