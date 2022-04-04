<?php

namespace Src\Solid\ISP\Before;

interface Notifier
{
    public function sendSMS();

    public function sendEmail();

    public function sendWebSocket();
}
