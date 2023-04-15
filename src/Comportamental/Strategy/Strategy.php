<?php

namespace src\Comportamental\Strategy;

interface Strategy
{
    public function doAlgorithm(array $data): array;
}
