<?php

namespace Src\PaymentProvider;

class SamanGatewayAdapter implements OnlineGatewayInterface
{
    private SamanBankGateway $samanApi;

    /**
     * @param SamanBankGateway $samanApi
     */
    public function __construct(SamanBankGateway $samanApi)
    {
        $this->samanApi = $samanApi;
    }

    public function startPay(Invoice $invoice): void
    {
        $this->samanApi->pay($invoice->amount());
    }
}
