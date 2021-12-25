<?php

namespace Src\FactoryMethod\Logger;

class SlackLoggerFactory extends MessageLogger
{

    protected function createLogger(): logger
    {
        return new SlackLogger();
    }
}
