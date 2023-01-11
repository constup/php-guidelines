# Factory Method Design Pattern

## Table of contents

- [Definition and claimed purposes](#definition-and-claimed-purposes)
- [Components](#components)
- [Benefits and problems](#benefits-and-problems)
    - [Benefits](#benefits)
    - [Problems](#problems)
- [Common misunderstandings](#common-misunderstandings)
    - [Creators are NOT Factories](#creators-are-not-factories)
    - [Creators are NOT a specific type of class](#creators-are-not-a-specific-type-of-class)
    - [Creators are NOT exclusively abstract classes and interfaces](#creators-are-not-exclusively-abstract-classes-and-interfaces) 
    - [Details of the implementation of factory methods is NOT defined in the Factory Method Design Pattern](#details-of-the-implementation-of-factory-methods-is-not-defined-in-the-factory-method-design-pattern)
- [Examples](#examples)
    - [Theoretical examples](#theoretical-examples)
    - [Practical examples](#practical-examples) 
- [Alternative solution](#alternative-solution) 
- [Conclusions](#conclusions)
- [References](#references)

## Definition and claimed purposes

- > Define an interface for creating an object, but let subclasses decide which class to instantiate. Factory
  Method lets a class defer instantiation to subclasses. [[1](#1)]

- Intended to be used when a class can't anticipate the type of the object it must create, and wants to delegate this
  decision to its subclasses. 

## Components

- **Product Interface** - Interface of objects which Factory Method creates.
- **Concrete Product(s)** - One or more concrete classes implementing the Product Interface. A product of the factory 
  method. (_note: not to be mistaken with a Product as an e-commerce type of object_).
- **Creator** - one of the following:
    - an interface which contains a declaration of a factory method;
    - an abstract class which contains an abstract declaration of a factory method;
    - an abstract class which contains a definition (default implementation) of a factory method;
    - a concrete (extendable) class which contains a definition (default implementation) of a factory method;
- **Concrete Creator(s)** - One or more concrete classes extending (if it's a class) or implementing (if it's an interface)
  the Creator. Concrete creators have Factory Methods which are making Concrete Products.

## Benefits and problems

### Benefits

- Decouples object creation from concrete Product classes. This is only an illusory benefit. The same can be achieved by
  decoupling object creation to dedicated Factory classes. See [problems](#problems) for more details.

- Allows dealing with object creation on an abstract level and passing the concrete implementations to concrete classes.
  This is also achievable with the Abstract Factory Design Pattern, but without downsides Factory Method adds. See
  [problems](#problems) for more details. 

### Problems

- Object creation decoupling is not achieved by implementing it in a dedicated class with a single responsibility of 
  creating objects. It is implemented by introducing a new responsibility of creating Products to Creators and Concrete 
  Creators, even though creating Products are not their primary responsibility.
 
- Multiple unrelated Creators can have a need to produce the same Products by applying the same object creation rules.
  When this happens, without having a dedicated Factory and while only relying on Factory Methods, you have a choice: 
  either you artificially introduce dependencies between creators just to use the same Factory Method in both Creators, 
  or you need to re-implement the same Factory Method in two places. 
 
  The problem becomes even more prominent and complex when Concrete Creators need to override Factory methods of their 
  parent Creators in the same way. If you are thinking about resolving this by also using an independent Product 
  Factory, then there is no point of using Factory Methods in the first place - just use Factories instead and remove 
  the unnecessary complexity and artificially added dependencies.
 
- You can not write a general-purpose Factory Method which can be reused anywhere in the application, without 
  introducing dependencies between otherwise totally unrelated (Creator) classes. Factory Methods are tied to the 
  Creators and Concrete Creators.

- You might be tempted to set Factory Methods in Concrete Creator classes to private and encapsulate them into internal
  workings of Concrete Creator classes. In that case, you will definitively create perfect conditions for code 
  duplication since you may need to use exactly the same Factory Method in another type of (Concrete) Creator. Thinking
  that this will not happen in your use case is only delaying the problem until it happens. You will then have to find a
  way to re-use the code inside the Factory Method instead of using a proper solution in the first place and avoiding 
  the problem altogether.

## Common misunderstandings

### Creators are NOT Factories

One of the most popular websites for documenting design patterns in PHP,
[designpatternsphp.readthedocs.io](https://designpatternsphp.readthedocs.io) presents an example implementation of the
Factory Method by using Factory classes [[2](#2)] as if it's the only way of implementing Factory Methods - this is 
misleading.

The term "Creator" is used deliberately, instead of the term "Factory". This is because Creators are **not** Factories -
they are usually regular classes with their own purpose and functionality, which simply have one or more Factory Methods 
implemented in them. Since Factories are classes (obviously), they **can** be Creators - Factories are a subset of 
Creators. This is explained in the book _"Design Patterns: Elements of Reusable Object-Oriented Software"_ [[1](#1)] 
which also provides examples of Creators containing functionality other than creating objects.

The reason for this misunderstanding lies in the fact that Factory Method, as a Design Pattern, is breaking the single
responsibility of classes, by introducing a responsibility of creating external objects. Because of this, it adds 
confusion to software developers who are used to have their code organized in a way where every class has a single 
purpose or covers a single domain - thus the misunderstanding that Creators are, in fact, Factories.

### Creators are NOT a specific type of class

Unlike Factories, which clearly have one purpose (to create objects) and can usually be named as such (example:
`ProductFactory`, `ButtonFactory`,...), Creators are not a specific type of class with a specific purpose. Creators are
general purpose classes which can be viewed as creators only in a context of relation to the Product creation process. 
It does not make sense to name a class something like `ButtonCreator`.

Two of the most obvious reasons for this are:

- A class might have a need to create two or more types of Products, thus having two or more distinct factory methods 
  implemented in it. Example: a UI class can have a need to create buttons, checkboxes, panels, input fields,... You can 
  not pick a single element of the UI and name the UI class after it. `ButtonCreator` name does not make sense when the 
  class is also creating checkboxes and input fields.
- Even if a Creator has only one Factory Method, the Creator's purpose is not to create a Product. The Creator simply 
  has a method to create a Product, but it most likely uses the created product as well, in order to perform some 
  operation.

### Creators are NOT exclusively abstract classes and interfaces

Creators can be concrete classes with a default implementation of the factory method. Concrete Creators (classes which 
are extending the Creator class) can override a factory method defined in the parent Creator class.

In fact, _"Design Patterns: Elements of Reusable Object-Oriented Software"_ [[1](#1)] only lists abstract classes as a
"less common" implementation of the factory method while listing Creators which are concrete classes as one of the 
mainstream implementations.

(_Note: The above-mentioned frequency of use of the Factory Method Pattern with abstract classes, interfaces or concrete 
classes as Creators is based on an opinion of the book's authors from 1994. Software and programming languages landscape
has changed significantly since then. The fact stays, however, that concrete classes can be Creators._)

### Details of the implementation of factory methods is NOT defined in the Factory Method Design Pattern

Another top search result when searching for "design patterns PHP" lists a website called
[sourcemaking.com](https://sourcemaking.com). Sourcemaking claims that the only implementation of a factory method is a
_Parameterized factory method_. Again, the same as with the Factories and Creators - parameterized factory methods are
only **one possible type** of implementation listed as an option in _"Design Patterns: Elements of Reusable
Object-Oriented Software"_ [[1](#1)] (_Factory Method > Implementation > point 2._):

> _Parameterized factory methods_. Another variation on the pattern lets the factory method create multiple kinds of 
products. The factory method takes a parameter that identifies the kind of object to create. All objects the factory
method creates will share the Product interface.

The arguments and contents of factory methods can be anything, as long as the factory method creates an object and its
return type is Product Interface.

## Examples

## Theoretical examples

Several theoretical examples are available in [TheoreticalExamples](./TheoreticalExamples) and are 
including:

- [Abstract Creator; internal use of Factory Method](./TheoreticalExamples/README.md#abstract-creator-internal-use-of-a-factory-method)
- [Interface Creator; internal use of a Factory Method](./TheoreticalExamples/README.md#interface-creator-internal-use-of-a-factory-method)
- [More than one Factory Method](./TheoreticalExamples/README.md#more-than-one-factory-method)
- [Parameterized Factory Method](./TheoreticalExamples/README.md#parameterized-factory-method)

## Practical examples

The following practical examples are available in [PracticalExamples](./PracticalExamples):

- [Abstract Creator; internal use of Factory Method](./PracticalExamples/README.md#abstract-creator-internal-use-of-factory-method)
- [More than one Factory Method](./PracticalExamples/README.md#more-than-one-factory-method)

## Alternative solution

One example of an alternative solution, which solves all the problems Factory Methods are trying to solve, but also
offers more flexibility and avoids many problems Factory Methods have, is available in 
[AlternativeSolution](./AlternativeSolution). 

> Please note: This is only **one** example of a better reusable alternative solution and is in no way the only one.

## Conclusions

Although factory method is described in several online resources as "the **real** design pattern because it achieves the
dependency inversion principle" [[2](#2)], it is, in fact, an anti-pattern at best, which breaks the single 
responsibility principle and creates more problems than it solves. In its core, it's a half implemented object creation 
decoupling mechanism with bad side effects. It also manages to achieve an exceptional level of code entanglement by 
enabling and encouraging unnecessary dependencies between unrelated classes and opening space for code duplication.

---

## References

- <a name="1"></a>[1] Design Patterns: Elements of Reusable Object-Oriented Software - Erich Gamma, Richard Helm, Ralph
  Johnson, and John Vlissides - ISBN	0-201-63361-2
- <a name="2"></a>[2] [https://designpatternsphp.readthedocs.io/en/latest/Creational/FactoryMethod/README.html](https://designpatternsphp.readthedocs.io/en/latest/Creational/FactoryMethod/README.html)
- <a name="3"></a>[3] [https://sourcemaking.com/design_patterns/factory_method/php/1](https://sourcemaking.com/design_patterns/factory_method/php/1)

## Links

[Contents](../../../../doc/table_of_contents.adoc) • [Home](../../../../README.md)
