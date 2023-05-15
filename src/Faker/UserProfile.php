<?php

namespace Src\Faker;

class UserProfile
{
    private string $gender;
    private int $age;
    private string $city;

    /**
     * @param string $gender
     * @param int $age
     * @param string $city
     */
    public function __construct(string $gender, int $age, string $city)
    {
        $this->gender = $gender;
        $this->age = $age;
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }


}
