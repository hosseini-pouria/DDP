<?php

namespace Src\Solid\DIP\After;

class Connection
{
    public function query(string $query, array $params): bool
    {
        return true;
    }
}
