<?php

declare(strict_types = 1);

namespace App\DesignPatterns\Structural\Adapter\TheoreticalExamples\ClassAdapter\AmbiguousCall;

class ClientService
{
    public function doSomething(TargetInterface $target): string
    {
        $result = 'ClientService->doSomething(): ' . $target->request() . PHP_EOL . PHP_EOL;

        $result .= 'This is ambiguous. The `specificRequest()` method is not present in the `TargetInterface`.' . PHP_EOL;
        $result .= 'The method can be used in `ClientService`, but only if the instance of `Adapter` is passed to `ClientService->doSomething()`.' . PHP_EOL;
        $result .= 'If any other concrete implementation of the `TargetInterface` is passed, this code will throw an error.' . PHP_EOL;
        $result .= 'The worst part of this error is: PHP accepts this method call and will only throw an error at runtime.' . PHP_EOL;
        $result .= 'The only way this problem could be detected is through an IDE or a static code analysis tool, but that also depends on both the tool and its settings.' . PHP_EOL . PHP_EOL;
        $result .= 'Result of `$target>specificRequest(): ' . $target->specificRequest();

        return $result;
    }
}
