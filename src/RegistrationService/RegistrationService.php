<?php

namespace Src\RegistrationService;

use Src\RegistrationService\Checkers\ReferralChecker;
use Src\RegistrationService\Checkers\UserEmailChecker;
use Src\RegistrationService\Checkers\UserPasswordChecker;

class RegistrationService
{
    public function register(RegistrationRequest $request): bool
    {
        return $this->CheckerChain()->check($request);
    }

    private function CheckerChain(): Checker
    {
        $referralChecker = new ReferralChecker();
        $passwordChecker = new UserPasswordChecker($referralChecker);
        return new UserEmailChecker($passwordChecker);
    }
}
