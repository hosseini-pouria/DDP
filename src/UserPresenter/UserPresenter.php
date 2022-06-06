<?php

namespace Src\UserPresenter;

use Carbon\Carbon;

class UserPresenter
{
    private User $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function fullName(): string
    {
        return $this->user->getFirstName() . ' ' . $this->user->getLastName();
    }

    public function persianRegisterDate(): Carbon
    {
        return $this->user->getRegisterDate();
    }
}
