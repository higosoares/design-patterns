<?php

namespace src\Estrutural\Adapter;

class Target implements TargetInterface
{
    public function request(): string
    {
        return "Target: The default target's behavior.";
    }
}
