<?php

namespace Src\Faker;

class UserFactory
{
    private array $users = [];
    private array $userProfile = [];

    public function createUser($firstName, $lastName, $gender, $age, $city): User
    {
        $userProfile = $this->createUserProfile($gender, $age, $city);
        $user = new User($firstName, $lastName, $userProfile);
        $this->users[] = $user;
        return $user;
    }

    public function createUserProfile($gender, $age, $city): UserProfile
    {
        $key = $this->createKey(get_defined_vars());
        if (!isset($this->userProfile[$key])) {
            $this->userProfile[$key] = new UserProfile($gender, $age, $city);
        }

        return $this->userProfile[$key];
    }

    public function createKey(array $data): string
    {
        ksort($data);
        return md5(implode('_', $data));
    }
}
