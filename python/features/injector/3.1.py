'''
 - It decouple implementations by keys and the method - configure. It helps to rebuild relations.
'''
from injector import Module, Key, provides, Injector, inject, singleton

InnerKey = Key('InnerKey')

class Inner(object):
  def __init__(self):
    self.forty_two = 42

class Outer(object):
  @inject(inner=InnerKey)
  def __init__(self, inner):
    self.inner = inner

def configure(binder):
  binder.bind(InnerKey, to=Inner, scope=singleton)


injector = Injector(configure)
outer = injector.get(Outer)
print outer.inner.forty_two