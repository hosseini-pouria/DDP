<?php

namespace Src\Solid\OCP\After;

interface EncoderInterface
{
    public function encode($data): string;
}
