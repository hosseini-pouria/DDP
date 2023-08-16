<?php

namespace Src\AbstractVisitor;

interface Component
{
    public function accept(Visitor $visitor);
}
