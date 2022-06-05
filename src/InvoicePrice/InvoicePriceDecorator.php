<?php

namespace Src\InvoicePrice;

class InvoicePriceDecorator implements InvoicePrice
{
    private InvoicePrice $invoicePrice;

    /**
     * @param InvoicePrice $invoicePrice
     */
    public function __construct(InvoicePrice $invoicePrice)
    {
        $this->invoicePrice = $invoicePrice;
    }

    public function price(): int
    {
        return $this->invoicePrice->price();
    }
}
