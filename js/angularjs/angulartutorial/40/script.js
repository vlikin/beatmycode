var app = angular.module('app', ['ngRoute']);

app.config(function ($routeProvider, $locationProvider) {
  $routeProvider
    .when('/',
    {
      templateUrl: "app.html",
      controller: "ViewCtrl"
    })
    .when('/new',
    {
      templateUrl: "new.html",
      controller: "NewCtrl",
      resolve: {
        loadData: viewCtrl.loadData
      }
    });
});

app.controller("AppCtrl", function ($rootScope, $location, $scope, $route) {
  console.log('-- AppCtrl');
  $rootScope.$on("$routeChangeStart", function (event, current, previous, rejection) {
    console.log('--routeChangeStart');
    console.log($scope, $rootScope, $route, $location);
  });
  $rootScope.$on("$routeChangeSuccess", function (event, current, previous, rejection) {
    console.log('--routeChangeSuccess');
    console.log($scope, $rootScope, $route, $location);
  });
});

var viewCtrl = app.controller("ViewCtrl", function ($scope, $route, $location, $scope) {
  $scope.changeRoute = function () {
    console.log('--Start to change a route.');
    console.log($scope);
    $location.path("/new");
  }
});

app.controller("NewCtrl", function($scope, loadData, $template) {
  console.log('-- NewCtrl');
  console.log($scope, loadData, $template);
});

viewCtrl.loadData = function ($q, $timeout) {
  var defer = $q.defer();
  console.log('--loadData - defer');
  $timeout(function () {
    console.log('--loadData - resolve ');
    defer.resolve({ message:"success" }); 
  }, 2000);
  return defer.promise;
};