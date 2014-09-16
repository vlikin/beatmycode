'''
  - It injects classes. We define what we need initialize before the main class - Outer initialization.
  We initialize the injector. We get a rule, A rule is invoked so we receive an instance of the class - Outer.
  Inner class has been initialized automatically.

  https://github.com/alecthomas/injector#a-quick-example
'''
from injector import Injector, inject
class Inner(object):
  def __init__(self):
    self.forty_two = 42

class Outer(object):
  @inject(inner=Inner)
  def __init__(self, inner):
    self.inner = inner

injector = Injector()
outer = injector.get(Outer)
print outer.inner.forty_two