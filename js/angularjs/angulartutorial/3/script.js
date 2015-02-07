var app = angular.module("app", [])

app.directive("dumbPassword", function () {
  var validElement = angular.element('<div>{{ model.input }}</div>');
  var link = function (scope, element) {
    scope.$watch("model.input", function (value) {
      if(value === "password") {
        element.children(1).toggleClass("alert-box alert");
      }
    });
  };

  return {
    restrict: "E",
    replace: true,
    templateUrl: "dumbpass.html",
    compile: function(element) {
      element.append(validElement);

      return link;  
    }
  };
});