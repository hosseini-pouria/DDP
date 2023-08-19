<?php

namespace Src\Tax;

class Client
{
    public function tax(Manager $manager): void
    {
        $manager->accept(new TaxCalculator());
    }
}
