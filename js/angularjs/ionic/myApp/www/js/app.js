angular.module('songhop', ['ionic'])

.controller('DiscoverCtrl', function($scope, $ionicLoading, $timeout, User, Recommendations) {
  // helper functions for loading
  var showLoading = function() {
    $ionicLoading.show({
      template: '<i class="ion-loading-c"></i>',
      noBackdrop: true
    });
  }

  var hideLoading = function() {
    $ionicLoading.hide();
  }

  // set loading to true first time while we retrieve songs from server.
  showLoading();
});

