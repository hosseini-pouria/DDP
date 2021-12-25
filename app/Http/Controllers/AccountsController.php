<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Src\FactoryMethod\AccountRegistry\AccountCreator;
use Src\FactoryMethod\AccountRegistry\GeneralAccountFactory;
use Src\FactoryMethod\AccountRegistry\GoldAccountFactory;

class AccountsController extends Controller
{
    public function register(Request $request)
    {
        $service = $this->createAccountService($request->get('account_type'));
        $service->registerAccount(Auth::user(), $request->get('balance'));
    }

    private function createAccountService(string $accountType):AccountCreator
    {
        if ($accountType == 'gold')
            return new GoldAccountFactory();

        return new GeneralAccountFactory();
    }
}
