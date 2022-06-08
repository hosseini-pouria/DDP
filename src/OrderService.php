<?php

namespace Src;

class OrderService
{
    private QuantityService $quantityService;
    private DiscountService $discountService;

    public function register(Basket $basket)
    {
        // check quantity
        foreach ($basket->items() as $product)
            $result = $this->quantityService->exist($product);

        // discount apply
        $amount = $this->discountService->apply($basket->coupon());

        // register order
        $order = Order::create(1, $amount, [], $basket->coupon());
    }
}
