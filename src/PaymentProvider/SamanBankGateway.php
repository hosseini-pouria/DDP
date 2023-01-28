<?php

namespace Src\PaymentProvider;

class SamanBankGateway
{
    private $apiKry;

    /**
     * @param $apiKry
     */
    public function __construct($apiKry)
    {
        $this->apiKry = $apiKry;
    }

    public function pay(int $amount): void
    {

    }
}
