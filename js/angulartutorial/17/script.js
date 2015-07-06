var app = angular.module('superhero', [])

app.directive('superman', function(){
  return {
    restrict: 'A',
    link: function() {
      console.log('I am working - Attribute');
    }
  };
});


app.directive('superman', function(){
  return {
    restrict: 'C',
    link: function(){
      console.log('I am working - Class');
    }
  };
});

app.directive('superman', function(){
  return {
    restrict: 'M',
    link: function(){
      console.log('I am working - Comment');
    }
  };
});