<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use src\Criacional\Factory\{RoupaFactory, TenisFactory, ProdutoFactory};


function clientCode(ProdutoFactory $creator)
{
    // ...
    echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperation();
    // ...
}

echo "App: Launched with the ConcreteCreator1.\n";
clientCode(new RoupaFactory());
echo "\n\n";

echo "App: Launched with the ConcreteCreator2.\n";
clientCode(new TenisFactory());
