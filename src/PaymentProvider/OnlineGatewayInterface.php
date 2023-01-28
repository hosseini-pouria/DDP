<?php

namespace Src\PaymentProvider;

interface OnlineGatewayInterface
{
    public function startPay(Invoice $invoice): void;
}
