It containes programm patterns - Gang of Four.

Types:
 - C - Creational.
 - B - Behavioral.
 - S - Structual.

1.  C - prototype.php .
2.  C - singleton.php .
3.  C - abstract_factory.php .
5.  C - factory_method.php .
6.  S - decorator.php .
7.  S - proxy.php .
8.  S - adapter.php .
9.  S - bridge.php .
10. S - facade.php .
11. S - composite.php .
12. S - flyweight.php .
13. B - interpreter.php .
14. B - interator.php .
15. B - mediator.php .
16. B - memento.php .
17. B - visitor.php .
18. B - command.php .
19. B - builder.php .
20. B - template_method.php .
21. B - strategy.php .
22. B - state.php .
23. B - observer.php .
24. B - chain_of_responsibility.php .


Questions:

- How do the Proxy, Decorator, Adapter, and Bridge Patterns differ?

Proxy(S) - It likes the adapter pattern. It incapsulates an object, it does everyting under the hood.

Decorator(S) - This is used when you want to add functionality to an object, but not by extending that object's type. This allows you to do so at runtime.

Adapter(S) - is used when you have an abstract interface, and you want to map that interface to another object which has similar functional role, but a different interface.

Bridge(S) - The UML class diagram for the Strategy(B) pattern is the same as the diagram for the Bridge(S) pattern. However, these two design patterns aren't the same in their intent. While the Strategy(B) pattern is meant for behavior, the Bridge pattern(S) is meant for structure.

Facade(S) - is a higher-level (read: simpler) interface to a subsystem of one or more classes. Think of Facade as a sort of container for other objects, as opposed to simply a wrapper.

