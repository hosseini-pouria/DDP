<?php

namespace Src\Product;

class Client
{
    public function updatePrice()
    {
        $product = new Product(1000000);
        $product->attachPriceObservers();

        $product->changePrice(15000000);
    }
}
