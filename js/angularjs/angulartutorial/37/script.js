var app = angular.module('app', ['ngRoute']);

app.config(function ($routeProvider) {
  $routeProvider
    .when('/',
    {
      templateUrl: 'app.html',
      controller: 'AppCtrl',
      resolve: {
        app: function ($q, $timeout) {
          var defer = $q.defer();
          $timeout(function () {
            console.log('app');
            defer.resolve(); 
          }, 2000);
          return defer.promise;
        },
        loadData: appCtrl.loadData,
        prepData: appCtrl.prepData
      },
    }
  )
});

var appCtrl = app.controller('AppCtrl', function ($scope, $route) {
  console.log($route);
  $scope.model = {
    message: 'I am a great app!'
  }
});

appCtrl.loadData = function ($q, $timeout) {
  var defer = $q.defer();
  $timeout(function () {
    defer.resolve('loadData'); 
    console.log('loadData');
  }, 2000);
  return defer.promise;
};

appCtrl.prepData = function ($q, $timeout) {
  var defer = $q.defer();
  $timeout(function () {
    console.log('prepData');
    defer.resolve('prepData'); 
  }, 2000);
  return defer.promise;
};