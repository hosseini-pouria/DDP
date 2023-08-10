<?php

namespace Src\RegistrationService;

final class RegistrationRequest
{
    private string $emailAddress;
    private string $password;
    private string $referralCode;

    /**
     * @param string $emailAddress
     * @param string $password
     * @param string $referralCode
     */
    public function __construct(string $emailAddress, string $password, string $referralCode)
    {
        $this->emailAddress = $emailAddress;
        $this->password = $password;
        $this->referralCode = $referralCode;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getReferralCode(): string
    {
        return $this->referralCode;
    }


}
