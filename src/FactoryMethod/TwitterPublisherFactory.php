<?php

namespace Src\FactoryMethod;

class TwitterPublisherFactory extends MessagePublisher
{

    protected function createPublisher(): Publisher
    {
        return new TwitterPublisher();
    }
}
