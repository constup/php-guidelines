<?php

declare(strict_types = 1);

namespace App\WarningSigns\FinalClasses\DecoratorOverride;

class Decorator implements ComponentInterface
{
    protected ComponentInterface $component;

    /**
     * @param ComponentInterface $component
     */
    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }

    /**
     * @return ComponentInterface
     */
    public function getComponent(): ComponentInterface
    {
        return $this->component;
    }

    public function operation(): string
    {
        return $this->getComponent()->operation() . '... but it\'s extended by a Decorator.';
    }
}
