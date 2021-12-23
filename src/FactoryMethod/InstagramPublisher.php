<?php

namespace Src\FactoryMethod;

class InstagramPublisher implements Publisher
{

    public function publish(Message $message)
    {
        echo printf("instagram publisher ->%s - %s - %s", $message->getTitle(), $message->getImage(), $message->getContent());
    }
}
