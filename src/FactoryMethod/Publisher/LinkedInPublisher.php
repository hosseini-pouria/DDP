<?php

namespace Src\FactoryMethod\Publisher;

class LinkedInPublisher implements Publisher
{

    public function publish(Message $message)
    {
        echo printf("linked in publisher ->%s - %s - %s", $message->getTitle(), $message->getImage(), $message->getContent());
    }
}
