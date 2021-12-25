<?php

namespace Src\FactoryMethod\Logger;

class TelegramLoggerFactory extends MessageLogger
{

    protected function createLogger(): logger
    {
        return new TelegramLogger(new TelegramAPI());
    }
}
