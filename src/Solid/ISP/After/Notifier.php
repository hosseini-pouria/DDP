<?php

namespace Src\Solid\ISP\After;

interface Notifier
{
    public function sendSMS();

    public function sendEmail();

    public function sendWebSocket();
}
