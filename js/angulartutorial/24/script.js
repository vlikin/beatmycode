var app = angular.module("app",[]);

app.factory("game", function () {
  return {
    title: "StarCraft"
  };
});

// It invokes a service outside a controller.
angular.injector(["app"]).invoke(function (game) {
  alert(game.title);
});

// The service is injected in the controller attribute.
app.controller("AppCtrl", function ($scope, game) {
  $scope.title = game.title;
});


app.controller("SecondCtrl", function ($scope, $injector) {
  $injector.invoke(function (game) {
    $scope.title = game.title;
  });
});