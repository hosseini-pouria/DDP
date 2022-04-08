<?php

namespace Src\Solid\DIP\After2;

interface DispatcherInterface
{
    public function dispatch(string $event, array $payload): void;
}
