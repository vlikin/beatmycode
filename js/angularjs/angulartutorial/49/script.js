var app = angular.module('phoneApp', []);

var phoneAppStuff = {
  app: 0,
  controllers: {},
  directives: {},

  process: function() {
    this.app.controller(this.controllers);
    this.app.directive(this.directives);
  }
};


phoneAppStuff.app = app;

phoneAppStuff.controllers.AppCtrl = function ($scope) {
 this.sayHi = function () {
    alert("hi");
  };

  return $scope.AppCtrl = this;
};

phoneAppStuff.directives.panel = function () {
  return {
    restrict: "E"
  };
};

phoneAppStuff.process();