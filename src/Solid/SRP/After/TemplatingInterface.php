<?php

namespace Src\Solid\SRP\After;

interface TemplatingInterface
{
    public function render(string $template, array $array): string;
}
