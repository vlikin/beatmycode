var app = angular.module('ionicApp', ['ionic'])

app.config(function($stateProvider, $urlRouterProvider) {
  $urlRouterProvider.otherwise('/')

  $stateProvider.state('home', {
    url: '/',
    template: '<p>Hello, world!</p>'
  })
})