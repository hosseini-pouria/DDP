<?php

namespace Src\ChatService;

class Message
{
    private int $sender;
    private int $receiver;
    private string $body;

    /**
     * @param int $sender
     * @param int $receiver
     * @param string $body
     */
    public function __construct(int $sender, int $receiver, string $body)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->body = $body;
    }

    /**
     * @return int
     */
    public function getSender(): int
    {
        return $this->sender;
    }

    /**
     * @return int
     */
    public function getReceiver(): int
    {
        return $this->receiver;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }


}
