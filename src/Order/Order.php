<?php

namespace Src\Order;

use Src\Order\OrderStatuses\Pending;

class Order
{
    private OrderStatus $status;

    public function __construct()
    {
        $this->transitTo(new Pending());
    }

    public function paid(): void
    {
        $this->status->paid();
    }

    public function prepare(): void
    {
        $this->status->prepare();
    }

    public function ready(): void
    {
        $this->status->ready();
    }

    public function sent(): void
    {
        $this->status->sent();
    }

    public function delivered(): void
    {
        $this->status->delivered();
    }

    public function transitTo(OrderStatus $status): void
    {
        $this->status = $status;
        $this->status->setOrder($this);
    }


}
