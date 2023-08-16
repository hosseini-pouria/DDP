<?php

namespace Src\AbstractVisitor;

class ComponentA implements Component
{

    public function accept(Visitor $visitor): void
    {
        $visitor->visitComponentA($this);
    }
}
