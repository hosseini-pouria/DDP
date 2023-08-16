<?php

namespace Src\AbstractVisitor;

class ComponentB implements Component
{

    public function accept(Visitor $visitor): void
    {
        $visitor->visitComponentB($this);
    }
}
