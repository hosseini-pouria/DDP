<?php

namespace Src\PaymentModule\Methods;

use Src\PaymentModule\Invoice;
use Src\PaymentModule\PaymentMethod;

class ChequePayment extends PaymentMethod
{

    public function startPay(Invoice $invoice)
    {
        // cheque pay tasks

        $this->handler->pay($invoice);
    }
}
