<?php

namespace Src\PaymentModule;

abstract class PaymentMethod
{
    protected PaymentHandlerInterface $handler;

    /**
     * @param PaymentHandlerInterface $handler
     */
    public function __construct(PaymentHandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    abstract public function startPay(Invoice $invoice);
}
