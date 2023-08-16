<?php

namespace Src\Tax;

class TeamLead implements Employee
{
    public function salary(): int
    {
        return 3500;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitMidRange($this);
    }
}
