<?php

namespace Src\OrderService;

class DiscountService
{
    private function isValid(string $coupon): bool
    {
        return true;
    }

    public function apply(string $coupon)
    {
        if (!$this->isValid($coupon))
            return new \RuntimeException('این کد تخفیف معتبر نیست');

        return 500000;
    }
}
