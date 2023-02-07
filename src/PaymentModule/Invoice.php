<?php

namespace Src\PaymentModule;

class Invoice
{
    private $title;
    private $price;

    /**
     * @param $title
     * @param $price
     */
    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }


}
