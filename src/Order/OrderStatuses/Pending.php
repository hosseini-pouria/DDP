<?php

namespace Src\Order\OrderStatuses;

use Src\CRM\Exceptions\InvalidStatusException;
use Src\Order\OrderStatus;

class Pending extends OrderStatus
{

    /**
     * @throws InvalidStatusException
     */
    public function pending()
    {
        throw new InvalidStatusException('سفارش در حال انتظار نمی تواند دوباره به حالت انتظار تغغیر پیدا کند.');
    }

    public function paid(): void
    {
        $this->order->transitTo(new Paid());
    }

    /**
     * @throws InvalidStatusException
     */
    public function prepare()
    {
        throw new InvalidStatusException('سفارش در حال انتظار نمی تواند در حالت آماده سازی قرار بگیرد.');
    }

    public function ready()
    {
        throw new InvalidStatusException('سفارش در حال انتظار نمی تواند در حالت آماده بودن بگیرد.');
    }

    public function send()
    {
        throw new InvalidStatusException('سفارش در حال انتظار نمی تواند در حالت ارسال شده قرار بگیرد.');
    }

    public function delivered()
    {
        throw new InvalidStatusException('سفارش در حال انتظار نمی تواند در حالت تحویل شده قرار بگیرد.');
    }
}
