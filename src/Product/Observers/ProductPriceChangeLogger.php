<?php

namespace Src\Product\Observers;

use SplSubject;

class ProductPriceChangeLogger implements \SplObserver
{

    public function update(SplSubject $subject)
    {
        // INSERT INTO product_logger (product_id, price, created_at) VALUES ($subject->id(), $subject->price(), date(''Y-M-D H:i:s))
    }
}
