<?php

namespace Src\PaymentModule;

interface PaymentHandlerInterface
{
    public function pay(Invoice $invoice);
}
