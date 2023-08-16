<?php

namespace Src\AbstractVisitor;

interface Visitor
{
    public function visitComponentA(ComponentA $componentA);
    public function visitComponentB(ComponentB $componentB);
    public function visitComponentC(ComponentC $componentC);
}
