<?php

namespace Src\Solid\DIP\After;

interface UserProviderInterFace
{
    public function findUser(string $username): bool;
}
