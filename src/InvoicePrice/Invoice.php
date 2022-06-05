<?php

namespace Src\InvoicePrice;

class Invoice implements InvoicePrice
{
    public function price(): int
    {
        return 1000000;
    }
}
