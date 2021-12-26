<?php

namespace Src\EventDispatcher;

class UserService
{
    private $eventDispatcher;

    /**
     * @param EventDispatcher $eventDispatcher
     */
    public function __construct(EventDispatcher $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function deletedUser(int $userId):void
    {
        $this->eventDispatcher->fire('user:deleted', $this, [
            'userId' => $userId
        ]);
    }
}
