<?php

namespace Src\OrderBuilder;

class OrderLine
{
    private $itemName;
    private $count;
    private $price;

    /**
     * @param $itemName
     * @param $count
     * @param $price
     */
    public function __construct($itemName, $count, $price)
    {
        $this->itemName = $itemName;
        $this->count = $count;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

}
