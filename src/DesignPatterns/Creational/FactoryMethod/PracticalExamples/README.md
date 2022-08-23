# Practical examples

## Table of contents

- [Abstract Creator; internal use of Factory Method](#abstract-creator-internal-use-of-a-factory-method)
- [More than one Factory Method](#more-than-one-factory-method)

## Abstract Creator; internal use of Factory Method

Links:
- [Link to the example.](./AbstractCreatorInternalUse)) 
- [Use of the example in a Symfony Command.](../../../../Command/DesignPatterns/Creational/FactoryMethod/PracticalExamples/AbstractCreatorInternalUseCommand.php)
- Execute Symfony command:
  ```shell
  php bin/console design-patterns:factory-method:practical:abstract-creator-internal-use
  ``` 
- Execute in Docker:
  ```shell
  docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:factory-method:practical:abstract-creator-internal-use
  ```
  
Features of this example:

- Buttons are products UI classes are producing in their factory methods. UI classes are Creators in this case. Produced
  buttons are then used in the main functionality of UI classes.
- See [Abstract Creator; internal use of Factory Method](../TheoreticalExamples/README.md#abstract-creator-internal-use-of-a-factory-method)
  for more theoretical details (with theoretical example equivalent). 
   

## More than one Factory Method

Links:
- [Link to the example.](./MoreThanOneFactoryMethod)
- [Use of the example in a Symfony Command.](../../../../Command/DesignPatterns/Creational/FactoryMethod/PracticalExamples/MoreThanOneFactoryMethodCommand.php)
- Execute Symfony command:
  ```shell
  php bin/console design-patterns:factory-method:practical:more-than-one-factory-method
  ``` 
- Execute in Docker:
  ```shell
  docker exec -it constup_php_guidelines php /usr/src/app/bin/console design-patterns:factory-method:practical:more-than-one-factory-method
  ```  
  
Features of this example:

- UI classes (our Creators) are producing different types of Buttons and Checkboxes in two separate factory methods. 
  These products are then used in the main functionality of UI classes.
- See [More than one Factory Method](../TheoreticalExamples/README.md#more-than-one-factory-method) for more theoretical
  details (with theoretical example equivalent).
