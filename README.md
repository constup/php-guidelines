# PHP Guidelines

PHP development guidelines repository with examples. This includes, but is not limited to:

- design patterns
- SOLID principles
- OOP principles

All topics are covered with examples. The base for examples is Symfony 6 on PHP 8.1. Symfony is used just for 
convenience. The samples are written in pure PHP and are applicable to any PHP framework or CMS.

## Table of contents

[Table of contents](./doc/table_of_contents.md) is available on a separate page.

## Running the examples

You are free to use this repository as an online resource. However, if you would like to run the provided examples, you
can clone this repository and use it on your local machine.

There are two ways of running the examples:

- On your local machine
  - You need to have PHP 8.1 installed and active. Check it by running `php -v`.
  - Your local PHP installation must be able to run Symfony 6.
  - Run (in root directory of the cloned repository): 
    ```shell
    composer install
    ``` 
- Inside a Docker container
  - You need to have Docker installed and running.
  - Run (in root directory of the cloned repository):
    ```shell
    docker-compose up --build
    ``` 

All examples in the documentation have both commands (local and docker) included.

## Licenses

- Code license: [Apache License 2.0](LICENSE). Original license is also available at:
[https://www.apache.org/licenses/LICENSE-2.0](https://www.apache.org/licenses/LICENSE-2.0) 
- Documentation license: [CC BY-NC-SA 4.0](DOC_LICENSE). Original license is also available at: 
  [https://creativecommons.org/licenses/by-nc-sa/4.0/](https://creativecommons.org/licenses/by-nc-sa/4.0/)

<img src="doc/by-nc-sa.png" alt="cc-by-nc-sa-4.0" /> 

Author: Nikola D. Stojiljković / constUP
