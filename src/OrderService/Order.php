<?php

namespace Src\OrderService;

class Order
{
    private int $userId;
    private int $amount;
    private int $orderLines;
    private float $coupon;

    /**
     * @param $userId
     * @param $amount
     * @param $orderLines
     * @param $discount
     */
    public function __construct($userId, $amount, $orderLines, $discount)
    {
        $this->userId = $userId;
        $this->amount = $amount;
        $this->orderLines = $orderLines;
        $this->coupon = $discount;
    }

    public static function create($userId, $amount, $orderLines, $discount): self
    {
        return new self($userId, $amount, $orderLines, $discount);
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @return mixed
     */
    public function getCoupon()
    {
        return $this->coupon;
    }
}
