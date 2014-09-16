'''
  It injects functions. It registers a function. It registers a variable that could be injected.
  In the function - configure, the injection rule is set. We initialize the injector with rules.
  We get the injection rule and invoke it.

  https://github.com/alecthomas/injector#recent-notable-changes
'''
from injector import Injector, inject, Key
GreetingType = Key('GreetingType')

@inject(greeting_type=GreetingType)
def greet(greeting_type, who):
  print('%s, %s!' % (greeting_type, who))

def configure(binder):
  binder.bind(GreetingType, to='Hello')

injector = Injector(configure)
greet_wrapper = injector.get(greet)
greet_wrapper(who='John')