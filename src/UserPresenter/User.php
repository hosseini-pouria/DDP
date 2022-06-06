<?php

namespace Src\UserPresenter;

use Carbon\Carbon;

class User
{
    private string $firstName;
    private string $lastName;
    private Carbon $registerDate;
    private string $emailAddress;

    /**
     * @param string $firstName
     * @param string $lastName
     * @param Carbon $registerDate
     * @param string $emailAddress
     */
    public function __construct(string $firstName, string $lastName, Carbon $registerDate, string $emailAddress)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->registerDate = $registerDate;
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return Carbon
     */
    public function getRegisterDate(): Carbon
    {
        return $this->registerDate;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

}
