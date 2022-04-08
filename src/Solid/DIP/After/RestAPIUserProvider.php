<?php

namespace Src\Solid\DIP\After;

class RestAPIUserProvider implements UserProviderInterFace
{
    public function findUser(string $username): bool
    {
        return true;
    }
}
