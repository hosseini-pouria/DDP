<?php

namespace Src\OrderBuilder;

class OrderBuilder
{
    private $customer;
    private $totalPrice;
    private $finalPrice;
    private $deliveryAddress;
    private $orderLine;
    private $status;
    private $order;

    private function __construct(?Order $order)
    {
        $this->order = $order;
    }

    public static function forge(?Order $order): OrderBuilder
    {
        return new OrderBuilder($order);
    }

    public function withCustomer($customer): OrderBuilder
    {
        $this->customer = $customer;
        return $this;
    }

    public function withTotalPrice($price): OrderBuilder
    {
        $this->customer = $price;
        return $this;
    }

    public function withStatus($status): OrderBuilder
    {
        $this->customer = $status;
        return $this;
    }

    public function withFinalPrice($price): OrderBuilder
    {
        $this->customer = $price;
        return $this;
    }

    public function withDeliveryAddress($deliveryAddress): OrderBuilder
    {
        $this->customer = $deliveryAddress;
        return $this;
    }

    public function withOrderLines($orderLines): OrderBuilder
    {
        $this->customer = $orderLines;
        return $this;
    }

    public function build(): Order
    {
        return new Order(
            $this->customer || $this->order->getCustomer(),
            $this->totalPrice || $this->order->getTotalPrice(),
            $this->deliveryAddress || $this->order->getDeliveryAddress(), $this->customer || $this->order->getCustomer(),
            $this->orderLine || $this->order->getOrderLine(),
            $this->status || $this->order->getStatus()
        );
    }
}
