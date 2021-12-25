<?php

namespace Src\FactoryMethod\Logger;

class TelegramLogger implements logger
{
    protected $telegramAPI;

    /**
     * @param TelegramAPI $telegramAPI
     */
    public function __construct(TelegramAPI $telegramAPI)
    {
        $this->telegramAPI = $telegramAPI;
    }

    public function log(LogMessage $message)
    {
        // TODO: Implement log() method.
    }
}
