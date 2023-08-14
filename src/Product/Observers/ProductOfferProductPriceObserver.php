<?php

namespace Src\Product\Observers;

use SplSubject;

class ProductOfferProductPriceObserver implements \SplObserver
{

    public function update(SplSubject $subject)
    {
        $productNewPrice = $subject->price();
        // UPDATE product_offers SET price = $productNewPrice Where product_id = $subject->id()
    }
}
