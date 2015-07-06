var app = angular.module('app',[]);

app.provider('game_refactored', function () {
  var type;
  return {
    setType: function (value) {
      type = value;
    },
    $get: function () {
      return {
        title: type + 'Craft - Refactored'
      };
    }
  };
});

app.factory('game_1', function () {
  return {
    title: 'StarCraft'
  };
});

app.config(function ($provide, game_refactoredProvider) {
  game_refactoredProvider.setType("War");

  $provide.factory('game_2', function () {
    return {
      title: 'StarCraft - 2'
    };
  });

   $provide.provider('game_3', function () {
    return {
      $get: function () {
        return {
          title: 'StarCraft - 3'
        };
      }
    };
  });
});

app.controller('AppCtrl', function ($scope, game_1, game_2, game_3, game_refactored) {
  $scope.title_1 = game_1.title;
  $scope.title_2 = game_2.title;
  $scope.title_3 = game_3.title;
  $scope.title_refactored = game_refactored.title;
});