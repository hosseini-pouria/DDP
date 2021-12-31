<?php

namespace Src\Payment;

interface PaymentMethod
{
    public function doPayment(Order $order);
}
