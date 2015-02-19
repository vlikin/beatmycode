var app = angular.module('app', []);

app.config(function ($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl: 'app.html',
      controller: 'ViewCtrl',
      resolve: {
        loadData: viewCtrl.loadData
      }
    }
  )
});

app.controller('AppCtrl', function ($rootScope) {
  $rootScope.$on('$routeChangeError', function (event, current, previous, rejection) {
    console.log('failed to change routes');
  });
});

var viewCtrl = app.controller('ViewCtrl', function ($scope) {
  $scope.model = {
    message: 'Im a great app!'
  }
});

app.directive("error", function ($rootScope) {
  return {
    restrict: "E",
    template: '<div class="alert-box alert" ng-show="isError">' +
              'Error!!!!!</div>',
    link: function (scope) {
      $rootScope.$on("$routeChangeError", function (event, current, previous, rejection) {
        scope.isError = true;
      });
    }
  }
});

viewCtrl.loadData = function ($q, $timeout) {
  var defer = $q.defer;
  $timeout(function () {
    defer.reject('loadData'); 
  }, 2000);
  return defer.promise;
};