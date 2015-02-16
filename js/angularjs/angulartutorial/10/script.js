var myApp = angular.module('myApp', []); 

myApp.controller("AvengersCtrl", ['$scope', 'Avengers', function ($scope, Avengers) {
  console.log(Avengers);
  $scope.avengers = Avengers;
}]);

myApp.factory('Avengers', function () {
  var Avengers = {};

  Avengers.cast = [
    {
      name: 'viktor',
      age: 30
    },
    {
      name: 'elena',
      age: 29
    },
    {
      name: 'sasha',
      age: 30
    },
    {
      name: 'fedya',
      age: 33
    },
  ];

  return Avengers;
});