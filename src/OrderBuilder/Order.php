<?php

namespace Src\OrderBuilder;

class Order
{
    private $customer;
    private $totalPrice;
    private $finalPrice;
    private $deliveryAddress;
    private $orderLine;
    private $status;

    /**
     * @param $customer
     * @param $totalPrice
     * @param $finalPrice
     * @param $deliveryAddress
     * @param $orderLine
     * @param $status
     */
    public function __construct($customer, $totalPrice, $finalPrice, $deliveryAddress, $orderLine, $status)
    {
        $this->customer = $customer;
        $this->totalPrice = $totalPrice;
        $this->finalPrice = $finalPrice;
        $this->deliveryAddress = $deliveryAddress;
        $this->orderLine = $orderLine;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @return mixed
     */
    public function getFinalPrice()
    {
        return $this->finalPrice;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @return mixed
     */
    public function getOrderLine()
    {
        return $this->orderLine;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

}
