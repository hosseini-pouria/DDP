<?php

namespace Src\AbstractVisitor;

class ComponentC implements Component
{

    public function accept(Visitor $visitor): void
    {
        $visitor->visitComponentC($this);
    }
}
