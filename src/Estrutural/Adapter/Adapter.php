<?php

namespace src\Estrutural\Adapter;

class Adapter implements TargetInterface
{
    private $classToAdapterInterface;

    public function __construct(ClassToAdapterInterface $classToAdapterInterface)
    {
        $this->classToAdapterInterface = $classToAdapterInterface;
    }

    public function request(): string
    {
        return "Adapter: (TRANSLATED) " . strrev($this->classToAdapterInterface->specificRequest());
    }
}
