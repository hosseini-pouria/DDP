<?php

namespace Src\PaymentModule\Methods;

use Src\PaymentModule\Invoice;
use Src\PaymentModule\PaymentMethod;

class CashPayment extends PaymentMethod
{

    public function startPay(Invoice $invoice)
    {
        // cash payment tasks

        $this->handler->pay($invoice);
    }
}
