<?php

namespace Src\FactoryMethod\Publisher;

class TwitterPublisher implements Publisher
{

    public function publish(Message $message)
    {
        echo printf("twitter publisher ->%s - %s - %s", $message->getTitle(), $message->getImage(), $message->getContent());
    }
}
