<?php

namespace src\Criacional\Factory;


class Tenis implements Produto
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
