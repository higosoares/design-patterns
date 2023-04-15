<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use src\Estrutural\Adapter\{Adapter, ClassToAdapter, Target, Request};

echo "Client: I can work just fine with the Target objects:\n";
$request = new Request(new Target());
echo $request->send();
echo "\n\n";

$classToAdapter = new ClassToAdapter();
echo "Client: The Class to Adapter class has a weird interface. See, I don't understand it:\n";
echo "ClassToAdapter: " . $classToAdapter->specificRequest();
echo "\n\n";

echo "Client: But I can work with it via the Adapter:\n";
$request = new Request(new Adapter($classToAdapter));
echo $request->send();
