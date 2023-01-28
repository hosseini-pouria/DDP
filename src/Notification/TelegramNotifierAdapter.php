<?php

namespace Src\Notification;

class TelegramNotifierAdapter implements Notifier
{
    private TelegramAPI $telegramApi;
    private string $chatId;

    /**
     * @param TelegramAPI $telegramApi
     * @param string $chatId
     */
    public function __construct(TelegramAPI $telegramApi, string $chatId)
    {
        $this->telegramApi = $telegramApi;
        $this->chatId = $chatId;
    }

    public function send(string $message)
    {
        $this->telegramApi->send($this->chatId, $message);
    }
}
