<?php

namespace Src\Tax;

class Manager implements Employee
{
    public function salary(): int
    {
        return 5500;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitHighRange($this);
    }
}
