# Final classes

## Definition

> The `final` keyword prevents child classes from overriding a method or constant by prefixing the definition with 
> `final`. If the class itself is being defined final then it cannot be extended.

Source: [PHP Documentation](https://www.php.net/manual/en/language.oop5.final.php)

## Why is it a warning sign?

`final` keyword is useless. It's a futile and desperate attempt to put an end to **Inheritance Hell**, only to be
"elegantly" avoided by the **Decorator** design pattern.

If you find a lot of `final` classes in a project, one (or more) of these is true:

- Project's code is an entangled mess of extended classes and overridden methods. You can expect a lot of bugs and
  unintended consequences as the feature's logic changes override after override. Any attempt of debugging will lead you
  through a labyrinth of parent classes and their overridden methods. The debugging path might also end up in a
  completely abstract hell where all logic is lost.
- Original developers didn't know what final classes really are. Classes were marked as final:
    - because they've heard about the `final` keyword and wanted to use it in their "leaf" classes... because it's fancy;
    - because of a delusion that, somehow, it makes the class quasi-private ("_it can be used in other classes, but can't
      be extended or its methods overridden_").
- Original developers didn't know that Decorator design pattern exists.
- Someone started marking classes as `final` because they knew that their less senior colleagues would be deterred from
  extending those classes (or didn't have the knowledge to extend them).
- `final` classes were used purely as an internal convention of the team and enforced on code reviews. What the real
  questions here are: Why was a class declared as final in the first place? What was the real problem you were trying to
  solve or prevent by declaring a class as `final`? If you have to forbid inheritance as well as use of the final class
  as a type of property of another class (to prevent the Decorator workaround for `final` keyword), is your architecture
  well-designed?

> Note: All of these claims were spotted directly in the wild, on live projects and within enterprise teams.

## What can be done about it?

While not necessarily bad by itself, the use of final classes usually shows that there is an underlying problem within
application's architecture. Try to find a reason why they are used in the first place and see if that problem can be 
solved in another way.

Avoiding this is simple: don't use final classes. Forget that `final` keyword even exists. It's functionally useless.

## Examples

- [A Decorator used to extend a final class](./DecoratorOverride)

---

## Links

[Contents](../../../doc/table_of_contents.md) • [Home](../../../README.md)
