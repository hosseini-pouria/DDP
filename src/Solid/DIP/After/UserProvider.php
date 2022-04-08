<?php

namespace Src\Solid\DIP\After;

class UserProvider implements UserProviderInterFace
{
    private Connection $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findUser(string $username): bool
    {
        $user = $this->connection->query("SELECT * FROM user WHERE username=?", ["username"=> $username]);
        if (!$user)
            throw new \RuntimeException('invalid username or password');

        return true;
    }
}
