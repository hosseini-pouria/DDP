<?php

namespace Src\Order;

use SplObserver;
use Src\Order\Observers\OrderPriceObserver;

class Order implements \SplSubject
{
    private const PENDING = 1;
    private const PROCESSING = 2;
    private const READY = 3;
    private const SENT = 4;
    private const DELIVERED = 5;
    private int $price;
    private int $status;
    private \SplObjectStorage $observers;

    public function __construct(int $price)
    {
        $this->price = $price;
        $this->status = self::PENDING;
        $this->observers = new \SplObjectStorage();
    }

    public function process(): void
    {
         $this->status = self::PROCESSING;
         $this->registerProcessingObservers();
    }

    public function ready(): void
    {
        $this->status = self::READY;
        $this->clearProcessingObservers();
    }

    private function registerProcessingObservers(): void
    {
        $this->attach(new OrderPriceObserver());
    }

    private function clearProcessingObservers(): void
    {
        foreach ($this->observers as $observer) {
            $this->detach($observer);
        }
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
            $observer->notify($this);
        }
    }

    public function changePrice(int $newPrice): void
    {
        $this->price = $newPrice;
        $this->notify();
    }
}
