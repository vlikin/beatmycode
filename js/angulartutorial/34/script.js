var app = angular.module('app', []);

app.controller('appCtrl', function ($scope, $q) {
  $scope.hello_message = 'Hello!';

   var defer = $q.defer();

  defer.promise
    .then(function (weapon) {
      alert("You can have my " + weapon);
      return "bow";
    })
    .then(function (weapon) {
      alert("And my " + weapon);
      return "axe";
    })
    .then(function (weapon) {
      alert("And my " + weapon);
    });

  defer.resolve("sword");
})