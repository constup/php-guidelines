# Theoretical examples

## Table of contents

- [Abstract Creator; internal use of Factory Method](#abstract-creator-internal-use-of-a-factory-method)
- [Interface Creator; internal use of a Factory Method](#interface-creator-internal-use-of-a-factory-method)
- [More than one Factory Method](#more-than-one-factory-method)
- [Parameterized Factory Method](#parameterized-factory-method)

## Abstract Creator; internal use of a Factory Method

Links:
- [Link to the example.](./AbstractCreatorInternalUse)
- [Use of the example in a Symfony Command.](../../../../Command/DesignPatterns/Creational/FactoryMethod/TheoreticalExamples/AbstractCreatorInternalUseCommand.php)
- Execute Symfony command: 
  ```shell
  php bin/console design-patterns:factory-method:abstract-creator-internal-use
  ``` 
- Execute in Docker:
  ```shell
  docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:factory-method:abstract-creator-internal-use
  ```

Features of this example:

- Creator as an abstract class with default implementation of the Factory Method. Creators do not have to be abstract 
  classes. You can use a regular class or an interface instead.  
- Concrete Creators (`CreatorX` and `CreatorY`) are extending the Creator. 
- Concrete Creator `CreatorX` is overriding the default implementation of the Factory Method.
- Concrete Creator `CreatorY` is inheriting the default implementation of the Factory Method. 
- Concrete Creators have their own functionality (`opeartionX` and `operationY`), but can also inherit methods from the 
  parent Creator.
- Operations of Concrete Creators use the Factory Method to generate an object of `ProductInterface`, process it
  and return some result.
- Factory Method in this example simply returns an appropriate Concrete Product for a Creator. However, factory methods
  can also contain some resolution or object construction logic, or have arguments. 
- In this example, parameters for Product creation are passed as arguments of the Factory Method. When using the Factory
  Method, you will have to provide values of these arguments. Parameters can also be stored as Creator's properties in a
  fully encapsulated type of implementation.  

## Interface Creator; internal use of a Factory Method

Links:
- [Link to the example.](./InterfaceCreatorInternalUse)
- [Use of the example in a Symfony Command.](../../../../Command/DesignPatterns/Creational/FactoryMethod/TheoreticalExamples/InterfaceCreatorInternalUseCommand.php)
- Execute Symfony command:
  ```shell
  php bin/console design-patterns:factory-method:interface-creator-internal-use
  ``` 
- Execute in Docker:
  ```shell
  docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:factory-method:interface-creator-internal-use
  ```

Features of this example:

- Creator is an interface. Creators do not have to be interfaces. You can use a regular or an abstract class instead.
- Concrete Creators (`CreatorX` and `CreatorY`) are implementing the Creator interface.
- Concrete Creators have their own functionality (`opeartionX` and `operationY`), but can also implement methods 
  declared in the Creator interface.
- Operations of Concrete Creators use the Factory Method to generate an object of `ProductInterface`, process it
  and return some result.
- Factory Method in this example simply returns an appropriate Concrete Product for a Creator. However, factory methods
  can also contain some resolution or object construction logic, or have arguments. 
- In this example, parameters for Product creation are stored as properties of Concrete Creators and passed to the 
  Factory Method. The Factory Method does not have any arguments in this case. Parameters for Product creation can
  also be passed as arguments of the Factory Method.

Visible problems:

- Creators are just regular classes with their own name, domain and purpose. They are merely using Products to perform 
  some operation. In a fully encapsulated implementation, Factory Method does not have any arguments and is picking 
  them up from the Concrete Creator's class properties.
  
  This creates an issue - when instantiating a Concrete Creator, you must also provide values required for the creation 
  of Products. This also means that properties of Products should also be declared as properties of Concrete Creators 
  (effectively duplicating them). Considering the fact that a Creator can have two or more Factory Methods producing 
  different types of Products (imagine that we have another interface `SomeOtherProduct` and a set of concrete classes
  implementing it), the list of properties of a Creator can grow significantly and become difficult to manage.

  The real world example at refactoring.guru (available 
  [here](https://refactoring.guru/design-patterns/factory-method/php/example#example-1)) has `FacebookPoster`/ 
  `LinekInPoster` as Concrete Creators and `FacebookConnector` / `LinkedInConnector` as Concrete Products. The purpose
  of the Connector is to connect to a social network. The purpose of the Poster is to post some content to a social 
  network. However, the Poster classes also have properties holding the login credentials, which are useful only in
  Factory Methods and have absolutely nothing to do with the main purpose of Posters - to post some content. Apart from
  cluttering the list of properties in Posters (Creators), this also adds confusion, since login credentials logically
  do not belong to a class which handles content posting.

  Mocking of Creator objects in unit tests also becomes more difficult with inclusion of properties from one or more 
  Products into the list of properties of a Creator. 

## More than one Factory Method

Links:
- [Link to the example.](./MoreThanOneFactoryMethod)
- [Use of the example in a Symfony Command.](../../../../Command/DesignPatterns/Creational/FactoryMethod/TheoreticalExamples/MoreThanOneFactoryMethodCommand.php)
- Execute Symfony command:
  ```shell
  php bin/console design-patterns:factory-method:more-than-one-factory-method
  ``` 
- Execute in Docker:
  ```shell
  docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:factory-method:more-than-one-factory-method
  ```  

Features of this example:

- Two distinct Factory Methods producing completely unrelated types of objects.
- This example clearly shows that the purpose of Creators is not to produce objects of a specific type. Its main purpose
  is implemented in other methods which merely use the objects produced by factory methods in order to perform some 
  operation.
- This example also shows why the name "Creator" should not be used in the name of the class and is only used in theory.
  Let's, for a moment, disregard the fact that Creators have their own purposes and thus their own names. If a Creator 
  has two or more Factory Methods which produce unrelated types of objects (`ProductInterface` and 
 `AnotherProductInterface`), it does not make sense to name the Creator something like `ProductCreator` or 
 `AnotherProductCreator`.  

## Parameterized Factory Method

Links:
- [Link to the example.](./ParameterizedFactoryMethod)
- [Use of the example in a Symfony Command.](../../../../Command/DesignPatterns/Creational/FactoryMethod/TheoreticalExamples/ParameterizedFactoryMethodCommand.php)
- Execute Symfony command:
  ```shell
  php bin/console design-patterns:factory-method:parameterized-factory-method
  ```
- Execute in Docker:
  ```shell
  docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:factory-method:parameterized-factory-method
  ``` 

Features of this example:

- Factory method implemented in Concrete Creators has an argument. Type of the Concrete Product which will be produced
  depends on the value of the argument.
- Factory Method Design Pattern does not define what logic will be inside the factory method itself. It only defines 
  that the return type of factory method must be Product's interface.
- Implementation details of factory methods of Concrete Creators (extending/implementing the same creator) can be 
  different. 

---

## Links

[Contents](../../../../../doc/table_of_contents.md) • [Factory Method Design Pattern](../../FactoryMethod) • [Home](../../../../../README.md)

 
