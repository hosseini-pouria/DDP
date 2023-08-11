<?php

namespace Src\Delivery;

use Src\Payment\Order;

interface DeliveryMethod
{
    public function price(Order $order);

    public function deliver(Order $order);
}
