<?php

namespace Src\ChatService;

class ChatRoom
{
    private array $users = [];
    private Emitter $emitter;

    /**
     * @param Emitter $emitter
     */
    public function __construct(Emitter $emitter)
    {
        $this->emitter = $emitter;
    }

    public function connect(User $user): void
    {
        $this->users[$user->getId()] = $user;
    }

    public function disconnect(User $user): void
    {
        unset($this->users[$user->getId()]);
    }

    public function send(Message $message): void
    {
        if (!isset($this->users[$message->getReceiver()])) {
            return;
        }

        $user = $this->users[$message->getReceiver()];
        $this->emitter->emit($user, $message);
    }
}
