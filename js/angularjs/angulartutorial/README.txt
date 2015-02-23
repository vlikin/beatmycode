This is an angular tutorials.
@url = https://thinkster.io/angulartutorial/a-better-way-to-learn-angularjs/
@url = https://thinkster.io/egghead/

=== Agenda ===
+1.  An Alternative Approach to Controllers.
  It helps reuse `this` of a tag.
+2.  angular.copy.
  It allows to create an intermediate object.
+3.  angular.element
  Directive, template, compile, scope link.
+4.  Animating the Angular Way
  Class names and animation are controlled programmaticaly.
+5.  Animating with JavaScript
  Class binding, enter, leave animation event.
+6.  Animation Basics
  CSS based, ng-enter, ng-leave.
+7.  Basic Behaviors
  Mouse over, mouse out.
+8.  Binding
  Data binding.
+9.  Building Zippy
  Directive, input data outside of the scope, transclude.
+10. Built-in Filters
  Filters: ng-model="search.$" -> filter:search, orderBy, limitTo, uppercase, lowercase
+11. Components and Containers
  Components -> custom tags, Containers wraps elements.
+12. The Config Function
  routeProvider in config => route in controller.
+13. Controllers
  Controller. Too simple.
+14. Defining a Method on the Scope
+15. Directive Communication
  The directive could require another directive. A directive contains a controllers.
  A directive requires anither directives, is able to reuse their controllers.
- 16. Directive for Route Handling
  I do not understand how it viewCtrl is injected into the route config.
+17. Directive Restrictions
  A - Attribute, C - class name, M - comment, few directives could be applied to a tag.
+18. Directive to Directive Communication
  Keep attantion to scope isollation.
+19. Directives Talking to Controllers
  $apply = $eval + $digest.
  $eval - Executes the expression on the current scope and returns the result.
  $digest - Processes all of the watchers of the current scope and its children.
  $watch - Registers a listener callback to a variable.
+20. Experimental "Controller as" Syntax
  Controllers wiyhou the variable - scope.
  It should helps with nested controllers.
+21. Filters
  It also shows how to inject services into filters.
+22. First Directive
  Too simple.
+23. $index, $event, $log
  $index for ng-repeat.
  $event - the event object of a element.
  $log - debugs the angular templates.
+24. Injectors
  Shows how to invoke service in the different places(outsite, as controller parameter, by $injector).
+25. Intro to bower
  Bower package manager.
+26. Isolate Scope "&"
  Parent scope.
+27. Isolate Scope "@"
  Atribute name=value
+28. Isolate Scope "="
  Operator expects an object which it can bind to. 
+29. Isolate Scope Review
+30. ng-repeat-start
  ng-repeat with the prefix and sufix.
+31. ng-view
  Routing.
+32. ngFilter
  Filter - look at 10.
+33. ngmin
  It is a tool that minifies the AngularJS code. We use the a gulp extension instead.
+34. Promises
  Defining a future chain of steps.
+35. Providers
  The factory and provider, definitions in the different places by different ways.
+36. redirectTo
  Redirect rules.
+37. Resolve Conventions
  Loads data before view is opened.
+38. Resolve $routeChangeError
  App ctrl with view ctrls. $routeChangeError - the error route event.
+39. Resolve
  The same as 34 + 38. resolve property contains a list of resolvers before a view is rendered.
+40. Route Life Cycle
  The order invoked event is described here.
+41. $routeParams
  Route Params provider.
+42. $routeProvider api
+43. $scope vs scope
  Look at 29.
+44. Sharing Data Between Controllers
  Sharing Data by a factory.
+45. $templateCache
  To set the template
  *templateUrl: 'zippy.html',
  *template: $templateCache.get('zippy.html'),
  To define the template:
  * <script type="text/ng-template" id="zippy.html"> ..
  * $templateCache.put("zippy.html", '<div>
  * Static file.
+46. templateUrl
  Look at 45.
-47. Testing Overview
+?48. The Dot
  It does not work as expected.
+49. Thinking Differently About Organization
  Assembling the angular project from different objects.
+50. Transclusion Basics
+51. Understanding Isolate Scope
  ng-click="var({chore: chore})" - Binding to variable.
+52. Useful Behaviors
  element, bind, mouseenter, mouseleave.

=== FAQ ===
 * DOM manipulation with/without jQuery - https://docs.angularjs.org/api/ng/function/angular.element .
 * gsap lib for animation - http://greensock.com/sequence-video
 * Difference between service, factory, provider, value, constant - http://habrahabr.ru/post/221733/ - http://habrahabr.ru/post/190342/
 * A scope of a directive is common because it is a scope of a cotroller. To use isolated directive scopes look at.
 * $digest sets all watchers.
 * $apply attaches the function to the exact scope. It is also wrapped into try/catched.
It is also updated after every $digest.
 * $http - the service looks like jQueyr.ajax
 * $resourse - It is reuseable $http object tunned for an end point.