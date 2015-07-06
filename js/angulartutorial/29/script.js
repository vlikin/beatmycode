/**
 * It shows interaction between the controller scope and the directive scope.
 * Values are passed to the directive by attributes. So we have two scopes:
 * - @ only read value from the controller to the directive scope.
 * - = It tracks changes both sides.
 * - & It keeps a callback with parameters from a controller scope.
 */

app = angular.module('phoneApp',[]);

app.controller('AppController', function($scope){
  $scope.leaveVoicemail = function(number, message){
    alert('Number: ' + number + ' said: ' + message);
  };
});

app.directive('phone', function(){
  return {
    restrict: 'E',
    scope: {
      number: '@',
      network: '=',
      makeCall: '&'
    },
    templateUrl: 'phone.html',
    link: function(scope){
        scope.networks = ["Verizon", "AT&T", "Sprint"];
        scope.network = scope.networks[0];
      }
  };
});
