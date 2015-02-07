var app = angular.module('phoneApp', []);

app.controller("AppCtrl", function ($scope) {
   this.sayHi = function () {
    alert("hi");
  };

  /*
   * In doing this, it is now possible to invoke methods defined on
   * ‘this’ by calling them on the controller attribute in the scope.
   */
  return $scope.AppCtrl = this;
});