<?php

namespace Src\Delivery;

use Src\Payment\Order;

class DeliveryService
{
    private DeliveryMethod $deliveryMethod;

    /**
     * @param DeliveryMethod $deliveryMethod
     */
    public function __construct(DeliveryMethod $deliveryMethod)
    {
        $this->deliveryMethod = $deliveryMethod;
    }

    public function startDelivery(Order $order): void
    {
        $deliveryPrice = $this->deliveryMethod->price($order);
        $this->deliveryMethod->deliver($order);
    }
}
