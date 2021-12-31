<?php

namespace Src\Payment;

class PaymentService
{
    /** @var $paymentMethod PaymentMethod*/
    private $paymentMethod;

    public function setPaymentMethod(PaymentMethod $method)
    {
        $this->paymentMethod = $method;
    }

    public function pay(Order $order)
    {
        $this->paymentMethod->doPayment($order);
    }
}
