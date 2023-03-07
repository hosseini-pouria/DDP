<?php

namespace Src\Basket;

class ProductPackage implements ProductItemInterface
{
    private array $products = [];

    /**
     * @param array $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function price(): int
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->price();
        }

        return $total;
    }
}
