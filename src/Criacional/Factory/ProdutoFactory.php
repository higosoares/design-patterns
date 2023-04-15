<?php

namespace src\Criacional\Factory;

abstract class ProdutoFactory
{
    /**
     * Note that the Creator may also provide some default implementation of the
     * factory method.
     */
    abstract public function criar(): Produto;

    /**
     * Also note that, despite its name, the Creator's primary responsibility is
     * not creating products. Usually, it contains some core business logic that
     * relies on Product objects, returned by the factory method. Subclasses can
     * indirectly change that business logic by overriding the factory method
     * and returning a different type of product from it.
     */
    public function someOperation(): string
    {
        // Call the factory method to create a Product object.
        $product = $this->criar();
        // Now, use the product.
        return "Creator: The same creator's code has just worked with " .
            $product->operation();
    }
}
