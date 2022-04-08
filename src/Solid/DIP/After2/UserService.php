<?php

namespace Src\Solid\DIP\After2;

use Illuminate\Contracts\Events\Dispatcher;

class UserService
{
    private DispatcherInterface $dispatcher;

    /**
     * @param DispatcherInterface $dispatcher
     */
    public function __construct(DispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function register(array $params)
    {
        // ... insert user in database
        $this->dispatcher->dispatch('user_register', ['user_id' => 1]);
    }
}
