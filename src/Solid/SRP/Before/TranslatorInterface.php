<?php

namespace Src\Solid\SRP\Before;

interface TranslatorInterface
{
    public function translate(string $text): string;
}
