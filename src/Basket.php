<?php

namespace Src;

class Basket
{
    private $items;

    public function add(Product $product)
    {
        $this->items[] = $product;
    }

    public function coupon(): string
    {
        return '64sa3fsd564sf';
    }

    public function items()
    {
        return $this->items;
    }
}
