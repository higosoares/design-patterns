<?php

namespace src\Estrutural\Adapter;

class Request
{
    private $targetInterface;

    public function __construct(TargetInterface $targetInterface)
    {
        $this->targetInterface = $targetInterface;
    }

    public function send(): string
    {
        return $this->targetInterface->request();
    }
}
