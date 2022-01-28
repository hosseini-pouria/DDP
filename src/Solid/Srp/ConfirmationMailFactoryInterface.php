<?php

namespace Src\Solid\Srp;

interface ConfirmationMailFactoryInterface
{
    public function createMessageFor(User $user): Message;
}
