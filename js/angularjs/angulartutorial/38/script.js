var app = angular.module('app', ['ngRoute']);

app.config(function ($routeProvider) {
  $routeProvider
    .when('/',
    {
      templateUrl: "app.html",
      controller: "ViewCtrl",
      resolve: {
        loadData: appCtrl.loadData
      }
    }
  )
});

app.controller("AppCtrl", function ($rootScope) {
  console.log('app - controller');
  $rootScope.$on("$routeChangeError", function (event, current, previous, rejection) {
    console.log("failed to change routes");
  });
});

var appCtrl = app.controller("ViewCtrl", function ($scope) {
  $rootScope.$on("$routeChangeError", function (event, current, previous, rejection) {
    console.log("failed to change routes");
  });
  $scope.model = {
    message: "I'm a great app!"
  }
});

appCtrl.loadData = function ($q, $timeout) {
  var defer = $q.defer();
  console.log('start loading.');
  $timeout(function () {
    console.log('Reject.');
    defer.reject("loadData"); 
  }, 2000);
  return defer.promise;
};