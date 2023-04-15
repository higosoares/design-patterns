<?php

namespace src\Criacional\Factory;


class TenisFactory extends ProdutoFactory
{
    public function criar(): Produto
    {
        return new Tenis();
    }
}
