<?php

namespace Src\Solid\SRP\Before;

interface TemplatingInterface
{
    public function render(string $template, array $array): string;
}
