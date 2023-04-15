<?php

declare(strict_types=1);

namespace src\Estrutural\Proxy;


class RealSubject implements Subject
{
    public function request(): void
    {
        echo "RealSubject: Handling request.\n";
    }
}
