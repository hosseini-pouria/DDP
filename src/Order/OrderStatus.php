<?php

namespace Src\Order;

abstract class OrderStatus
{
    protected Order $order;

    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }

    abstract public function pending();
    abstract public function paid();
    abstract public function prepare();
    abstract public function ready();
    abstract public function send();
    abstract public function delivered();
}
