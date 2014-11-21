'''
  - @file It tries to sort dictionaries.

  There is a problem to sort dictionaries by key. It saves an order, items had been set into.
  The part solution - https://docs.python.org/2/library/collections.html?highlight=ordereddict#ordereddict-examples-and-recipes .
'''
from collections import OrderedDict

# Solution.
d = {'banana': 3, 'apple': 4, 'pear': 1, 'orange': 2}
print OrderedDict(sorted(d.items(), key=lambda t: t[0]))

# Yes. It keeps order. The dict object is wrapped into another object.
d = OrderedDict([('apple', 4), ('banana', 3), ('orange', 2), ('pear', 1)])
print d
for k, v in d.iteritems():
  print '%s - %s' % (k, v)

# ! Look. It breaks the order again.
print dict(OrderedDict([('apple', 4), ('banana', 3), ('orange', 2), ('pear', 1)]))

# Another way. It can require more resources.
# !!! Dictionary does not keep the right order well.
print 'Another way ---- '
d = {'banana': 3, 'apple': 4, 'pear': 1, 'orange': 2}
dict_1 = {'banana': 3, 'apple': 4, 'pear': 1, 'orange': 2}
print dict_1
keys_1 = sorted(dict_1.keys())
print keys_1
dict_2 = dict([ (key, dict_1[key]) for key in keys_1 ])
print dict_2
print dict([ ('banana', 3), ('apple', 4), ('pear', 1), ('orange', 2) ])