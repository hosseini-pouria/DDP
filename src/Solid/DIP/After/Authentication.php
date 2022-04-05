<?php

namespace Src\Solid\DIP\After;

use http\Exception\RuntimeException;

class Authentication
{
    private Connection $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function check(string $username, string $password): bool
    {
        $user = $this->connection->query("SELECT * FROM user WHERE username=?", ["username"=> $username]);
        if (!$user)
            throw new \RuntimeException('invalid username or password');

        return true;
    }
}
