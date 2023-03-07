<?php

namespace Src\Basket;

class SingleProduct implements ProductItemInterface
{
    private $price;

    /**
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function price(): int
    {
        return $this->price;
    }
}
