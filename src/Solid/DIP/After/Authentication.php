<?php

namespace Src\Solid\DIP\After;

use http\Exception\RuntimeException;

class Authentication
{
    private UserProviderInterFace $user_provider;

    /**
     * @param UserProviderInterFace $user_provider
     */
    public function __construct(UserProviderInterFace $user_provider)
    {
        $this->user_provider = $user_provider;
    }

    public function check(string $username, string $password): bool
    {
        $user = $this->user_provider->findUser($username);
        if (!$user)
            throw new \RuntimeException('invalid username or password');

        return true;
    }
}
