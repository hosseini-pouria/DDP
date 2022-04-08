<?php

namespace Src\Solid\DIP\After;

class MongoUserProvider implements UserProviderInterFace
{
    public function findUser(string $username): bool
    {
        return true;
    }
}
