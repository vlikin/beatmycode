from injector import Module, Key, provides, Injector, inject, singleton

InnerKey = Key('InnerKey')
OuterKey = Key('OuteKey')

class Provided:
  def __init__(self, a=0):
    self.forty_two = -1

class Inner(object):
  def __init__(self):
    self.forty_two = 42

class OuterModule(Module):
  @singleton
  @provides(Provided)
  @inject(inner=InnerKey)
  def provide_by_class(self, inner):
    provided = Provided()
    provided.forty_two = inner.forty_two
    return provided

  @singleton
  @provides(OuterKey)
  @inject(inner=InnerKey)
  def provide_by_outer_key(self, inner):
    provided = Provided()
    provided.forty_two = inner.forty_two + 2
    return provided

def configure_for_testing(binder):
  binder.bind(InnerKey, to=Inner, scope=singleton)
  pass

injector = Injector([configure_for_testing, OuterModule])
print injector.get(InnerKey).forty_two
print injector.get(Provided).forty_two
print injector.get(OuterKey).forty_two
print injector.get(Provided) is injector.get(Provided)
print injector.get(InnerKey) is injector.get(InnerKey)
print injector.get(InnerKey) is injector.get(Provided)