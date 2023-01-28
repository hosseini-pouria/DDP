<?php

namespace Src\Notification;

interface Notifier
{
    public function send(string $message);
}
