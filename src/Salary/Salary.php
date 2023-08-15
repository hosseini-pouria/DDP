<?php

namespace Src\Salary;

abstract class Salary
{
    public function calculate(): ?int
    {
        return $this->getBaseSalary() + $this->extra();
    }

    protected function extra()
    {

    }

    abstract public function getBaseSalary(): int;
}
