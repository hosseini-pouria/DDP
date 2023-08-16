<?php

namespace Src\Tax;

interface Employee
{
    public function accept(Visitor $visitor);
}
