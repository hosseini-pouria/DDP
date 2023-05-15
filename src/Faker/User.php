<?php

namespace Src\Faker;

class User
{
    private string $firstName;
    private string $lastName;
    private UserProfile $profile;

    /**
     * @param string $firstName
     * @param string $lastName
     * @param UserProfile $profile
     */
    public function __construct(string $firstName, string $lastName, UserProfile $profile)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->profile = $profile;
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
     * @return UserProfile
     */
    public function getProfile(): UserProfile
    {
        return $this->profile;
    }


}
