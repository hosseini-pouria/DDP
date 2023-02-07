<?php

namespace Src\PaymentModule\Methods;

use Src\PaymentModule\Invoice;
use Src\PaymentModule\PaymentHandlerInterface;
use Src\PaymentModule\PaymentMethod;
use Illuminate\Database\Connection;

class OnlinePayment extends PaymentMethod
{
    private Connection $connection;

    /**
     * @param Connection $connection
     * @param PaymentHandlerInterface $handler
     */
    public function __construct(Connection $connection, PaymentHandlerInterface $handler)
    {
        parent::__construct($connection);
        $this->connection = $connection;
    }

    public function startPay(Invoice $invoice)
    {
//        $this->connection->insert("INSERT INTO payments");
        $this->handler->pay($invoice);
    }
}
