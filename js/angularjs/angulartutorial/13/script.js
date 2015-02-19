var app = angular.module('ajApp', []);

app.controller("AppCtrl", function ($scope) {
  $scope.message = "Hello!"

  /*
   * In doing this, it is now possible to invoke methods defined on
   * ‘this’ by calling them on the controller attribute in the scope.
   */
  return $scope.AppCtrl = this;
});