<?php

namespace src\Criacional\Factory;

class Roupa implements Produto
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}
