<?php

namespace Src\Tax;

class Developer implements Employee
{
    public function salary(): int
    {
        return 2500;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitLowRange($this);
    }
}
