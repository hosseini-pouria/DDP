<?php

namespace App\Services\Account;

use App\Models\User;
use Src\FactoryMethod\AccountRegistry\AccountCreator;

class AccountService
{
    private $accountRegistry;

    /**
     * @param AccountCreator $accountRegistry
     */
    public function __construct(AccountCreator $accountRegistry)
    {
        $this->accountRegistry = $accountRegistry;
    }

    public function register(User $user, int $balance): \App\Models\Account
    {
        return $this->accountRegistry->registerAccount($user, $balance);
    }
}
