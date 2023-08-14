<?php

namespace Src\Product;

use http\Exception\InvalidArgumentException;
use SplObserver;
use Src\Product\Observers\ProductOfferProductPriceObserver;

class Product implements \SplSubject
{
    private int $price;
    private \SplObjectStorage $observers;

    /**
     * @param int $price
     */
    public function __construct(int $price)
    {
        $this->price = $price;
        $this->observers = new \SplObjectStorage();
    }

    public function changePrice(int $newPrice): void
    {
        if ($this->price == $newPrice) {
            return;
        }
        if ($newPrice < 0) {
            throw new InvalidArgumentException('مبلغ یک محصول نمی تواند منفی باشد');
        }

        $this->price = $newPrice;
        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($this->observers);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($this->observers);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function attachPriceObservers(): void
    {
        $this->attach(new ProductOfferProductPriceObserver());
    }

    public function price(): int
    {
        return $this->price;
    }
}
