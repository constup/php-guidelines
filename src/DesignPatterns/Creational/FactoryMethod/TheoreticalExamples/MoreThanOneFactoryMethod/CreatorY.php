<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Creational\FactoryMethod\TheoreticalExamples\MoreThanOneFactoryMethod;

/**
 * Creators can have two or more Factory Methods which are producing completely different types of objects.
 *
 * Please note: Naming this class "Creator" is used here for demonstration purposes only. Please read the main README
 * for Factory Method to better understand naming conventions.
 */
class CreatorY implements CreatorInterface
{
    public function factoryMethod1(
        string $stringParameter,
        int $integerParameter
    ): ProductInterface {
        return new ProductB($stringParameter, $integerParameter);
    }

    public function factoryMethod2(): AnotherProductInterface
    {
        return new AnotherProduct2();
    }

    /**
     * This operation uses two factory methods, creates both object of ProductInterface and AnotherProductInterface,
     * then uses concrete products of both in processing and returning of a result.
     *
     * This example clearly shows that the purpose of Creators is not to produce objects of a specific type. Its main
     * purpose is implemented in the operationY() method which merely uses the objects produced by factory methods in
     * order to perform some operation.
     *
     * Please read the main Factory Method README for more details.
     *
     * @return string
     */
    public function operationY(): string
    {
        $product = $this->factoryMethod1('second test string value', 2);
        $anotherProduct = $this->factoryMethod2();

        $result = 'The purpose of CreatorY is not to create Products, but it can use them.' . PHP_EOL;
        $result .= 'This creator has two factory methods which produces two different types of products.' . PHP_EOL;

        $result .= 'A product of ProductInterface processing:' . PHP_EOL;
        $result .= $product->method1() . PHP_EOL;
        $result .= $product->method2() . PHP_EOL;

        $result .= 'A product of AnotherProductInterface processing:' . PHP_EOL;
        $result .= $anotherProduct->anotherProductMethod();

        return $result;
    }
}
