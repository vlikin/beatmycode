It containes programm patterns - Gang of Four.

Types:
 - C - Creational.

1.  C - prototype.php .
2.  B - command.php .
3.  C - singleton.php .
4.  B - builder.php .
5.  B - template_method.php .
6.  B - strategy.php .
7.  B - state.php .
8.  B - observer.php .
9.  B - chain_of_responsibility.php .
10. C - abstract_factory.php .
11. C - factory_method.php .
12. S - decorator.php .
13. S - proxy.php .
14. S - adapter.php .
15. S - bridge.php .

Questions:

- How do the Proxy, Decorator, Adapter, and Bridge Patterns differ?

Proxy(S) - It likes the adapter pattern. It incapsulates an object, it does everyting under the hood.

Decorator(S) - This is used when you want to add functionality to an object, but not by extending that object's type. This allows you to do so at runtime.

Adapter(S) - is used when you have an abstract interface, and you want to map that interface to another object which has similar functional role, but a different interface.

Bridge(S) - The UML class diagram for the Strategy(B) pattern is the same as the diagram for the Bridge(S) pattern. However, these two design patterns aren't the same in their intent. While the Strategy(B) pattern is meant for behavior, the Bridge pattern(S) is meant for structure.

Facade(S) - is a higher-level (read: simpler) interface to a subsystem of one or more classes. Think of Facade as a sort of container for other objects, as opposed to simply a wrapper.

