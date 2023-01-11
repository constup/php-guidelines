# Decorator override example

## Description

This example proves the claim that marking a class `final` is functionally useless.

## File contents

- [`ComponentInterface`](./ComponentInterface.php) : Each concrete feature class in this example implements this 
  interface.
- [`BaseClass`](./BaseClass.php) : A sample base class which is going to be extended.
- [`ExtendedClass`](./ExtendedClass.php) : A class which is directly extending the `BaseClass`.
- [`FinalClass`](./FinalClass.php) : A class which is extending `ExtendedClass` and is marked as `final`.
- [`Decorator`](./Decorator.php) : Base implementation of the Decorator design pattern. The decorator practically 
  "extends" the `FinalClass` and even implements the same interface. It then overrides the `operation` methods, just 
  like classic inheritance would.
- [`ConcreteDecorator`](./ConcreteDecorator.php) : Extends the `Decorator`, implements the same `ComponentInterface` and
  overrides the same `operation` method as any other feature class in this example. You can clearly see that you can 
  extend anything indefinitely, regardless of whether a class is declared as `final` or not.
- [`ClientClass`](./ClientClass.php) : Class which demonstrates the example. 

## Understanding and running tests

[`ClientClassTest`](../../../../tests/WarningSigns/FinalClasses/DecoratorOverride/ClientClassTest.php) provides a 
PHPUnit test case for this example. To confirm that the example works (and understand how), look at what each of the 
classes return as result of the `operation` method and compare it with the expected result in the test case.

---

## Links 

[FinalClasses](../README.md) • [Contents](../../../../doc/table_of_contents.adoc) • [Home](../../../../README.adoc)
