<?php

namespace Src\OrderBuilder;

class OrderService
{
    public function newOrder(NewOrderData $newOrderData)
    {
        $order = OrderBuilder::forge()
        ->withCustomer($newOrderData->customer)
        ->withDeliveryAddress($newOrderData->deliveryAddress)
        ->build();
    }

    public function reOrder(Order $order)
    {
        $order = OrderBuilder::forge($order)
            ->withDeliveryAddress('تهران - تهران - خیابان شماره 10 - کوچه 3 - پلاک 1')
            ->build();
    }
}
