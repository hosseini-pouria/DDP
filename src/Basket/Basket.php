<?php

namespace Src\Basket;

class Basket
{
    private array $items = [];

    public function add(ProductItemInterface $item): void
    {
        $this->items[] = $item;
    }

    public function totalPrice(): int
    {
        $total = 0;
        foreach ($this->items as $productItem) {
            $total += $productItem->price();
        }

        return $total;
    }
}
