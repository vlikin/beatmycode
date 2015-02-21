var myApp = angular.module('myApp', []);

myApp.factory('Data', function () {
  return { message: "I'm data from a service" }
});

myApp.controller('FirstCtrl', function($scope, Data) {
  $scope.data = Data;
});

myApp.controller('SecondCtrl', function($scope, Data) {
  $scope.data = Data;

  $scope.reversedMessage = function(message) {
    return message.split("").reverse().join("");
  };
});

myApp.filter('reverse', function (Data) {
  return function (text) {
    return text.split("").reverse().join("") + Data.message;
  }
});