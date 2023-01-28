<?php

namespace Src\PaymentProvider;

use http\Exception\InvalidArgumentException;

class Invoice
{
    private int $amount;

    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        if ($amount <= 0)
            throw new InvalidArgumentException('مقدار وارد شده برا مبلغ فاکتور معتبر نمی باشد');

        $this->amount = $amount;
    }

    public function amount(): int
    {
        return $this->amount;
    }
}
