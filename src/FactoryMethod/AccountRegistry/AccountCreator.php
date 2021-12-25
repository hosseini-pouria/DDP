<?php

namespace Src\FactoryMethod\AccountRegistry;

use App\Models\User;

abstract class AccountCreator
{
    public function registerAccount(User $user, int $balance): \App\Models\Account
    {
        $account = $this->getAccount();

        if ($balance < $account->minimumBalanceDefinition())
            throw new \RuntimeException('موجودی حساب شما برای افتتاح این نوع حساب کافی نمی‌باشد');

        $account = new \App\Models\Account([
            'interest' => $account->interestRate()
        ]);
        $account->save();

        return $account;
    }

    abstract protected function getAccount():Account;
}
